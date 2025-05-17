<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $fillable = [
        'user_id',
        'sorta_id',
        'kilos_reserved',
        'date_reserved',
    ];

    public function users() {
        return $this->belongsTo(User::class);
    }

    public function sorta() {
        return $this->belongsTo(Sorta::class);
    }
}
