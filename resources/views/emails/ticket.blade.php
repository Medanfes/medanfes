@component('mail::message')
# Hei, {{ $order->name }}! 🎉

Terima kasih sudah membeli tiket **MedanFes Night Live 2025**.

@component('mail::panel')
**Detail Pembelian:**
- **Nama:** {{ $order->name }}
- **Email:** {{ $order->email }}
- **Tipe Tiket:** {{ strtoupper($order->ticket_type) }}
- **Jumlah:** {{ $order->quantity }} tiket
- **Total:** Rp {{ number_format($order->total_price, 0, ',', '.') }}
- **Order ID:** MEDANFES-{{ $order->id }}
@endcomponent

E-ticket kalian terlampir dalam email ini dalam format PDF.
Tunjukkan QR Code kepada panitia saat masuk venue.

**Info Event:**
📅 25-27 Juli 2025
📍 Lapangan Merdeka, Medan

Sampai jumpa di MedanFes! 🎵

@component('mail::button', ['url' => '/'])
Kunjungi Website
@endcomponent

Salam,
**Tim MedanFes**
@endcomponent