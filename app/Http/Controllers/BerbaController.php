<?php

namespace App\Http\Controllers;

use App\Models\Berba;

class BerbaController extends Controller
{
    public function list() {
        return view('admin/berba/list', [
            "berbe" => Berba::all(),
        ]);
    }

    public function create() {
        return view('admin/berba/add');
    }

    public function edit($id) {
        $temp = Berba::find($id);

        return view('admin/berba/edit', [
            "temp_b" => $temp,
        ]);
    }

    public function destroy() {
    }
}
