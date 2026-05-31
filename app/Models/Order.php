<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $fillable = [
        'name',
        'email',
        'ticket_type',
        'quantity',
        'total_price',
        'snap_token',
        'status',
    ];

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }
}