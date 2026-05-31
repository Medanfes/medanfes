<?php

namespace App\Http\Controllers;

use App\Events\VoteUpdated;
use App\Models\Ticket;
use App\Models\Vote;
use Illuminate\Http\Request;

class VoteController extends Controller
{
    // Tampilkan halaman voting
    public function index()
    {
        $results = $this->getResults();
        return view('vote', compact('results'));
    }

    // Proses vote
    public function store(Request $request)
    {
        $request->validate([
            'ticket_code' => 'required|string',
            'song_title'  => 'required|string|max:255',
        ]);

        // Cek tiket valid
        $ticket = Ticket::where('ticket_code', $request->ticket_code)->first();

        if (!$ticket) {
            return response()->json([
                'success' => false,
                'message' => 'Kode tiket tidak ditemukan.',
            ], 404);
        }

        // Cek tiket sudah vote atau belum
        $alreadyVoted = Vote::where('ticket_id', $ticket->id)->exists();

        if ($alreadyVoted) {
            return response()->json([
                'success' => false,
                'message' => 'Kode tiket ini sudah digunakan untuk voting.',
            ], 422);
        }

        // Simpan vote
        Vote::create([
            'ticket_id'  => $ticket->id,
            'song_title' => $request->song_title,
        ]);

        // Broadcast hasil terbaru
        $results = $this->getResults();
        broadcast(new VoteUpdated($results));

        return response()->json([
            'success' => true,
            'message' => 'Vote berhasil!',
            'results' => $results,
        ]);
    }

    // Ambil hasil voting
    private function getResults(): array
    {
        return Vote::selectRaw('song_title, COUNT(*) as total')
            ->groupBy('song_title')
            ->orderByDesc('total')
            ->get()
            ->toArray();
    }
}