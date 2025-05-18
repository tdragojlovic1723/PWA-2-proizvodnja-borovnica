<?php

namespace App\Http\Controllers;

use App\Models\Plantaza;
use Illuminate\Http\Request;

class PlantazaController extends Controller
{
    public function list() {
        return view('admin/plantaza/list', [
            "plantaze" => Plantaza::all(),
        ]);
    }

    public function create() {
        return view('admin/plantaza/add');
    }

    public function edit($id) {
        $temp = Plantaza::find($id);

        return view('admin/plantaza/edit', [
            "temp_p" => $temp,
        ]);
    }

    public function destroy() {
    }
}
