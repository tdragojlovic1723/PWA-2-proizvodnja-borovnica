<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Berba extends Model
{
    public function plantaza() {
        return $this->belongsTo(Plantaza::class);
    }

    public function sorta() {
        return $this->belongsTo(Sorta::class);
    }
}
