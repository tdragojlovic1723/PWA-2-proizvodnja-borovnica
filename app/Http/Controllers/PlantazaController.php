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

    public function store(Request $req) {
        $valid = $req->validate([
            "name" => "required|string|unique:plantazas,name",
            "country" => "required|string",
            "city" => "required|string",
            "surface" => "required|decimal:0,3|min:0.1",
        ]);

        Plantaza::create($valid);

        return redirect()->route('plantaza.list')->with('success', 'Plantaža je uspešno dodata.');
    }

    public function edit($id) {
        $temp = Plantaza::find($id);

        return view('admin/plantaza/edit', [
            "plantaza" => $temp,
        ]);
    }

    public function update(Request $req, $id) {
        $valid = $req->validate([
            // REMINDER: ignorise sopstveno ime, da ne javi gresku bez razloga (u slucaju da se u editu ne menja ime)
            "name" => "required|string|unique:plantazas,name," . $id,
            "country" => "required|string",
            "city" => "required|string",
            "surface" => "required|decimal:0,3|min:0.1",
        ]);

        $p = Plantaza::find($id);

        $p->name = $valid['name'];
        $p->country = $valid['country'];
        $p->city = $valid['city'];
        $p->surface = $valid['surface'];

        $p->save();

        return redirect()->route('plantaza.list')->with('success', 'Uspešno izmenjena plantaža!');
    }

    public function destroy($id) {
        $p = Plantaza::find($id);

        // REMINDER: ovaj try/catch je postavljen zato sto moze doci do baga
        //           gde brisemo plantazu koja je vezana za neku berbu
        try {
            $p->delete();
        } catch(\Exception $e) {
            return back()->withErrors(['Greska' => 'Ova plantaža se koristi u nekoj berbi']);
        }

        return redirect()->route("plantaza.list")->with("success", "Plantaža uspešno izbrisana!");
    }
}
