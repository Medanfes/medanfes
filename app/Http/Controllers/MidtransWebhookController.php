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
        \Log::info('WEBHOOK MASUK', $request->all());
        // 1. Set Midtrans config (untuk validasi signature)
        Config::$serverKey = env('MIDTRANS_SERVER_KEY');
        Config::$isProduction = false;

        try {
            // 2. Ambil data dari Midtrans
            $payload = $request->all();

            $orderId      = $payload['order_id'] ?? null;
            $statusCode   = $payload['status_code'] ?? null;
            $grossAmount  = $payload['gross_amount'] ?? null;
            $signatureKey = $payload['signature_key'] ?? null;
            $transactionStatus = $payload['transaction_status'] ?? null;
            $fraudStatus  = $payload['fraud_status'] ?? null;

            if (!$orderId) {
                return response()->json(['message' => 'Invalid payload'], 400);
            }

            // 3. Ambil order ID asli (karena kamu pakai format MEDANFES-1-123456)
            $order = Order::where('snap_token', '!=', null)
                ->get()
                ->first(function ($o) use ($orderId) {
                    return str_contains($orderId, 'MEDANFES-' . $o->id . '-');
                });

            if (!$order) {
                return response()->json(['message' => 'Order not found'], 404);
            }

            // 4. VALIDASI SIGNATURE (WAJIB untuk keamanan)
            $serverKey = env('MIDTRANS_SERVER_KEY');

            $expectedSignature = hash(
                'sha512',
                $orderId . $statusCode . $grossAmount . $serverKey
            );

            if ($signatureKey !== $expectedSignature) {
                return response()->json(['message' => 'Invalid signature'], 403);
            }

            // 5. HANDLE STATUS TRANSAKSI
            if ($transactionStatus == 'settlement' || $transactionStatus == 'capture') {

                if ($fraudStatus == 'challenge') {
                    return response()->json(['message' => 'Transaction challenged'], 200);
                }

                // update order
                $order->update([
                    'status' => 'paid'
                ]);

                // generate ticket + send email (HANYA di sini)
                app(TicketService::class)->generateAndSend($order);
            }

            elseif ($transactionStatus == 'pending') {
                $order->update([
                    'status' => 'pending'
                ]);
            }

            elseif ($transactionStatus == 'expire') {
                $order->update([
                    'status' => 'expired'
                ]);
            }

            elseif ($transactionStatus == 'cancel') {
                $order->update([
                    'status' => 'cancelled'
                ]);
            }

            return response()->json([
                'message' => 'Webhook processed successfully'
            ]);

        } catch (\Exception $e) {
            return response()->json([
                'error' => $e->getMessage(),
                'line'  => $e->getLine()
            ], 500);
        }
    }
}