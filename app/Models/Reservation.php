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

    public function user() {
        return $this->belongsTo(User::class);
    }

    public function sorta() {
        return $this->belongsTo(Sorta::class);
    }

    public static function brojRezervacijaPoMesecima() {
        return self::selectRaw('MONTHNAME(date_reserved) AS month, COUNT(*) AS br')
                  ->groupByRaw('MONTH(date_reserved), MONTHNAME(date_reserved)')
                  ->orderByRaw('MONTH(date_reserved)')
                  ->get();
    }
}
