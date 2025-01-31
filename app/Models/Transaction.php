<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Transaction extends Model
{
    public function user()
    {
        return $this->belongsTo(User::class); // Relasi ke model User
    }

    protected $fillable = [
        'type',
        'amount',
        'description',
        'transaction_date',
        'user_id'
    ];
}
