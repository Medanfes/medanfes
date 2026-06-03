<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\TicketService;
use Illuminate\Http\Request;
use Midtrans\Config;
use Midtrans\Snap;

class OrderController extends Controller
{
    public function index()
    {
        return view('ticket');
    }

    public function store(Request $request)
    {
        try {

            Config::$serverKey    = config('services.midtrans.server_key');
            Config::$isProduction = env('MIDTRANS_IS_PRODUCTION', false);
            Config::$isSanitized  = true;
            Config::$is3ds        = true;

            $request->validate([
                'name'        => 'required|string|max:255',
                'email'       => 'required|email',
                'ticket_type' => 'required|in:regular,vip',
                'quantity'    => 'required|integer|min:1|max:10',
            ]);

            $price = $request->ticket_type === 'vip'
                ? 300000
                : 150000;

            $total = $price * $request->quantity;

            $order = Order::create([
                'name'        => $request->name,
                'email'       => $request->email,
                'ticket_type' => $request->ticket_type,
                'quantity'    => $request->quantity,
                'total_price' => $total,
                'status'      => 'pending',
            ]);

            $midtransOrderId = 'MEDANFES-' . $order->id . '-' . time();

            $params = [
                'transaction_details' => [
                    'order_id' => $midtransOrderId,
                    'gross_amount' => $total,
                ],
                'customer_details' => [
                    'first_name' => $request->name,
                    'email'      => $request->email,
                ],
            ];

            $snapToken = Snap::getSnapToken($params);

            $order->update([
                'snap_token' => $snapToken,
            ]);

            return response()->json([
                'success' => true,
                'snap_token' => $snapToken,
                'order_id' => $order->id,
            ]);

        } catch (\Exception $e) {

            return response()->json([
                'error' => $e->getMessage(),
                'line'  => $e->getLine(),
                'file'  => $e->getFile(),
            ], 500);

        }
    }
}