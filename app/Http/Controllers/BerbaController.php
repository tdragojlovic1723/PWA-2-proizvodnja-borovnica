<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BerbaController extends Controller
{
    //
    public function list() {
        return view('berba.list');
    }
}
