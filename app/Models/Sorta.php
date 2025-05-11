<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Sorta extends Model
{
    public function berbe() {
        return $this->hasMany(Berba::class);
    }

    public function reservations() {
        return $this->hasMany(Reservation::class);
    }
}
