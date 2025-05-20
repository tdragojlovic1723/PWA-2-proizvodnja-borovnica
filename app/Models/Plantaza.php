<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantaza extends Model
{
    protected $fillable = [
        'name',
        'country',
        'city',
        'surface',
    ];

    public function berbe() {
        return $this->hasMany(Berba::class);
    }
}
