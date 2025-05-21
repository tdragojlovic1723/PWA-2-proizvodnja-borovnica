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

    // Funkcija vraca prvih 5 sorti po plodnosti
    public static function najplodnijeSorte()
    {
        return self::orderBy('average_fertility', 'desc')
                    ->limit(5)
                    ->get();
    }

    // Funkcija vraca prvih 5 sorti po velicini
    public static function najveceSorte() {
        return self::orderBy('average_fruit_size', 'desc')
                    ->limit(5)
                    ->get();
    }
}
