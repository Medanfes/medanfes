<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <style>
        body {
            font-family: Arial, sans-serif;
            background: #0d0d0d;
            color: #ffffff;
            padding: 20px;
        }
        .ticket {
            border: 2px solid #f5a623;
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
            background: #1a1a1a;
        }
        .ticket-header {
            text-align: center;
            border-bottom: 1px solid #f5a623;
            padding-bottom: 10px;
            margin-bottom: 15px;
        }
        .ticket-header h1 {
            color: #f5a623;
            margin: 0;
            font-size: 28px;
        }
        .ticket-header p {
            margin: 5px 0 0;
            font-size: 14px;
            color: #cccccc;
        }
        .ticket-info {
            margin-bottom: 15px;
        }
        .ticket-info table {
            width: 100%;
        }
        .ticket-info td {
            padding: 5px 0;
            font-size: 13px;
        }
        .ticket-info td:first-child {
            color: #aaaaaa;
            width: 40%;
        }
        .qr-section {
            text-align: center;
            margin-top: 15px;
        }
        .qr-section img {
            width: 150px;
            height: 150px;
        }
        .ticket-code {
            font-size: 18px;
            font-weight: bold;
            color: #f5a623;
            letter-spacing: 3px;
            margin-top: 10px;
        }
    </style>
</head>
<body>
    @foreach($tickets as $ticket)
    <div class="ticket">
        <div class="ticket-header">
            <h1>MedanFes</h1>
            <p>Night Live 2025 — 25-27 July 2025, Lapangan Merdeka Medan</p>
        </div>

        <div class="ticket-info">
            <table>
                <tr>
                    <td>Nama</td>
                    <td>{{ $order->name }}</td>
                </tr>
                <tr>
                    <td>Email</td>
                    <td>{{ $order->email }}</td>
                </tr>
                <tr>
                    <td>Tipe Tiket</td>
                    <td>{{ strtoupper($order->ticket_type) }}</td>
                </tr>
                <tr>
                    <td>Order ID</td>
                    <td>MEDANFES-{{ $order->id }}</td>
                </tr>
            </table>
        </div>

        <div class="qr-section">
            <img src="{{ storage_path('app/public/' . $ticket->qr_code_path) }}">
            <div class="ticket-code">{{ $ticket->ticket_code }}</div>
        </div>
    </div>
    @endforeach
</body>
</html>