<?php

namespace App\Http\Controllers;

use App\Models\Sorta;

class SortaController extends Controller
{
    public function list() {
        return view('admin/sorta/list', [
            "sorta" => Sorta::all(),
        ]);
    }

    public function create() {
        return view('admin/sorta/add');
    }

    public function edit($id) {
        $temp = Sorta::find($id);

        return view('admin/sorta/edit', [
            "temp_s" => $temp,
        ]);
    }

    public function destroy() {
    }
}
