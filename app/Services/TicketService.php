<?php

namespace App\Services;

use App\Models\Order;
use App\Models\Ticket;
use App\Mail\TicketMail;
use Barryvdh\DomPDF\Facade\Pdf;
use SimpleSoftwareIO\QrCode\Facades\QrCode;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\File;

class TicketService
{
    public function generateAndSend(Order $order)
    {
        $tickets = [];

        // Pastikan folder QR ada
        $qrDir = storage_path('app/public/qrcodes');
        if (!File::exists($qrDir)) {
            File::makeDirectory($qrDir, 0755, true);
        }

        // Pastikan folder PDF ada
        $ticketDir = storage_path('app/public/tickets');
        if (!File::exists($ticketDir)) {
            File::makeDirectory($ticketDir, 0755, true);
        }

        for ($i = 0; $i < $order->quantity; $i++) {
            $ticketCode = strtoupper(Str::random(10));

            $qrPath = 'qrcodes/' . $ticketCode . '.svg';

            QrCode::size(200)->generate(
                $ticketCode,
                storage_path('app/public/' . $qrPath)
            );

            $ticket = Ticket::create([
                'order_id'     => $order->id,
                'ticket_code'  => $ticketCode,
                'qr_code_path' => $qrPath,
                'is_used'      => false,
            ]);

            $tickets[] = $ticket;
        }

        // Generate PDF tiket
        $pdf = Pdf::loadView('pdf.ticket', compact('order', 'tickets'));

        $pdfPath = storage_path(
            'app/public/tickets/tiket-' . $order->id . '.pdf'
        );

        $pdf->save($pdfPath);

        // Kirim email
        Mail::to($order->email)->send(
            new TicketMail($order, $tickets, $pdfPath)
        );

        return $tickets;
    }
}