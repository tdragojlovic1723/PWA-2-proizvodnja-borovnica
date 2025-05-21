<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Berba extends Model
{
    protected $fillable = [
        'date_harvested',
        'summary',
        'grade',
        'kilos_harvested',
        'sorta_id',
        'plantaza_id',
    ];

    public function plantaza() {
        return $this->belongsTo(Plantaza::class);
    }

    public function sorta() {
        return $this->belongsTo(Sorta::class);
    }

    public static function brojBerbiPoVrstiIzZemlje($lokacija)
    {
        return self::selectRaw('COUNT(*) AS br, sortas.kind')
                             ->join('plantazas', 'berbas.plantaza_id', '=', 'plantazas.id')
                             ->join('sortas', 'sortas.id', '=', 'berbas.sorta_id')
                             ->where('plantazas.country', 'LIKE', "%{$lokacija}%")
                             ->groupBy('sortas.kind')
                             ->get();
    }
}
