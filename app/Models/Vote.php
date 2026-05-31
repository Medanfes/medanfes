<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Vote extends Model
{
    protected $fillable = [
        'ticket_id',
        'song_title',
    ];

    public function ticket()
    {
        return $this->belongsTo(Ticket::class);
    }
}
