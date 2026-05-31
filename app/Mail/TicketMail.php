<?php

namespace App\Mail;

use App\Models\Order;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Mail\Mailables\Attachment;
use Illuminate\Queue\SerializesModels;

class TicketMail extends Mailable
{
    use Queueable, SerializesModels;

    public function __construct(
        public Order $order,
        public array $tickets,
        public string $pdfPath
    ) {}

    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Tiket MedanFes - ' . $this->order->name,
        );
    }

    public function content(): Content
    {
        return new Content(
            markdown: 'emails.ticket',
            with: [
                'order'   => $this->order,
                'tickets' => $this->tickets,
            ]
        );
    }

    public function attachments(): array
    {
        return [
            Attachment::fromPath($this->pdfPath)
                ->as('tiket-medanfes.pdf')
                ->withMime('application/pdf'),
        ];
    }
}