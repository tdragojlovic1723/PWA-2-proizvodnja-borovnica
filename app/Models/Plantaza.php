<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Plantaza extends Model
{
    public function berbe() {
        return $this->hasMany(Berba::class);
    }
}
