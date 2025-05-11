<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    public function users() {
        return $this->belongsTo(User::class);
    }

    public function sorta() {
        return $this->belongsTo(Sorta::class);
    }
}
