<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\TicketService;
use Illuminate\Http\Request;
use Midtrans\Config;

class MidtransWebhookController extends Controller
{
    public function handle(Request $request)
    {
        Config::$serverKey    = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);

        try {
            $payload = $request->all();

            $orderId           = $payload['order_id'] ?? null;
            $statusCode        = $payload['status_code'] ?? null;
            $grossAmount       = $payload['gross_amount'] ?? null;
            $signatureKey      = $payload['signature_key'] ?? null;
            $transactionStatus = $payload['transaction_status'] ?? null;
            $fraudStatus       = $payload['fraud_status'] ?? null;

            if (!$orderId) {
                return response()->json(['message' => 'Invalid payload'], 400);
            }

            $order = Order::where('snap_token', '!=', null)
                ->get()
                ->first(function ($o) use ($orderId) {
                    return str_contains($orderId, 'MEDANFES-' . $o->id . '-');
                });

            if (!$order) {
                return response()->json(['message' => 'Order not found'], 404);
            }

            $expectedSignature = hash(
                'sha512',
                $orderId . $statusCode . $grossAmount . env('MIDTRANS_SERVER_KEY')
            );

            if ($signatureKey !== $expectedSignature) {
                return response()->json(['message' => 'Invalid signature'], 403);
            }

            if ($transactionStatus == 'settlement' || $transactionStatus == 'capture') {

                if ($fraudStatus == 'challenge') {
                    return response()->json(['message' => 'Transaction challenged'], 200);
                }

                // Cegah duplikat kirim tiket
                if ($order->status === 'paid') {
                    return response()->json(['message' => 'Already processed'], 200);
                }

                $order->update(['status' => 'paid']);
                app(TicketService::class)->generateAndSend($order);

            } elseif ($transactionStatus == 'pending') {
                $order->update(['status' => 'pending']);

            } elseif ($transactionStatus == 'expire') {
                $order->update(['status' => 'expired']);

            } elseif ($transactionStatus == 'cancel') {
                $order->update(['status' => 'cancelled']);
            }

            return response()->json(['message' => 'Webhook processed successfully']);

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'line'  => $e->getLine(),
            ], 500);
        }
    }
}