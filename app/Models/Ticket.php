<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ticket extends Model
{
    protected $fillable = [
        'order_id',
        'ticket_code',
        'qr_code_path',
        'is_used',
    ];

    public function order()
    {
        return $this->belongsTo(Order::class);
    }

    public function vote()
    {
        return $this->hasOne(Vote::class);
    }
}