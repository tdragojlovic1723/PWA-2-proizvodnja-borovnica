<?php

namespace App\Http\Controllers;

use App\Models\Berba;
use App\Models\Plantaza;
use App\Models\Sorta;
use Illuminate\Http\Request;

class BerbaController extends Controller
{
    public function list() {
        return view('admin/berba/list', [
            "berbe" => Berba::all(),
        ]);
    }

    public function create() {
        return view('admin/berba/add', [
            "sortas" => Sorta::all(),
            "plantazas" => Plantaza::all(),
        ]);
    }

    public function store(Request $req) {
        $valid = $req->validate([
            "date_harvested" => "required|date|before_or_equal:today",
            "summary" => "nullable|string|max:1024",
            "grade" => "required|numeric|min:1|max:10",
            "kilos_harvested" => "required|numeric|min:1",
            "sorta_id" => "required",
            "plantaza_id" => "required",
        ]);

        Berba::create($valid);

        return redirect()->route('berba.list')->with('success', 'Berba je uspešno dodata.');
    }

    public function edit($id) {
        $temp = Berba::find($id);

        return view('admin/berba/edit', [
            "berba" => $temp,
            "sortas" => Sorta::all(),
            "plantazas" => Plantaza::all(),
        ]);
    }

    public function update(Request $req, $id) {
        $valid = $req->validate([
            "date_harvested" => "required|date|before_or_equal:today",
            "summary" => "nullable|string|max:1024",
            "grade" => "required|numeric|min:1|max:10",
            "kilos_harvested" => "required|numeric|min:1",
            "sorta_id" => "required",
            "plantaza_id" => "required",
        ]);

        $b = Berba::find($id);

        $b->date_harvested = $valid['date_harvested'];
        $b->summary = $valid['summary'];
        $b->grade = $valid['grade'];
        $b->kilos_harvested = $valid['kilos_harvested'];
        $b->sorta_id = $valid['sorta_id'];
        $b->plantaza_id = $valid['plantaza_id'];

        $b->save();

        return redirect()->route('berba.list')->with('success', 'Uspešno izmenjena berba!');
    }

    public function destroy($id) {
        $b = Berba::find($id);
        $b->delete();

        return redirect()->route("berba.list")->with("success", "Berba uspešno izbrisana!");
    }
}
