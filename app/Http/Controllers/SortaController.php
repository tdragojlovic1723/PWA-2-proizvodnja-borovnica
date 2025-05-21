<?php

namespace App\Http\Controllers;

use App\Models\Sorta;
use Illuminate\Http\Request;

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

    public function store(Request $req) {
        $req->validate([
            'kind' => 'required|string|max:128|unique:sortas,name',
            'description' => 'nullable|string',
            'average_fruit_size' => 'required|decimal:0,2|min:0.1',
            'average_fertility' => 'required|decimal:0,1|min:0.1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        $s = new Sorta();
        $s->kind = $req->input("kind");
        $s->description = $req->input("description");
        // brisem pocetne <p></p> i sve ostale koje se pojavljuju
        $s->description = str_replace(['<p>', '</p>'], '', $s->description);
        $s->average_fruit_size = $req->input("average_fruit_size");
        $s->average_fertility = $req->input("average_fertility");

        if ($req->hasFile("image")) {
            $imageFile = $req->file("image");
            $imageName = time() . "." . $imageFile->getClientOriginalExtension();
            $imagePath = $imageFile->storeAs("sorta_images", $imageName, 'public');
            $s->image = $imagePath;
        }

        $s->save();

        return redirect()->route('sorta.list')->with("success", "Sorta je uspešno dodata!");
    }

    public function edit($id) {
        $temp = Sorta::find($id);

        return view('admin/sorta/edit', [
            "sorta" => $temp,
        ]);
    }

    public function update(Request $req, $id) {
        $valid = $req->validate([
            "kind" => "required|string|max:128|unique:sortas,kind," . $id,
            "description" => "nullable|string",
            'average_fruit_size' => 'required|decimal:0,2|min:0.1',
            'average_fertility' => 'required|decimal:0,1|min:0.1',
            'image' => 'nullable|image|mimes:jpeg,png,jpg|max:4096',
        ]);

        $s = Sorta::find($id);

        $s->kind = $valid['kind'];
        $s->description = $valid['description'];
        $s->average_fruit_size = $valid['average_fruit_size'];
        $s->average_fertility = $valid['average_fertility'];

        if ($req->hasFile("image")) {
            $imageFile = $req->file("image");
            $imageName = time() . "." . $imageFile->getClientOriginalExtension();
            $imagePath = $imageFile->storeAs("sorta_images", $imageName, 'public');
            $s->image = $imagePath;
        }

        $s->save();

        return redirect()->route('sorta.list')->with('success', 'Uspešno izmenjena sorta!');
    }

    public function destroy($id) {
        $s = Sorta::find($id);

        // REMINDER: ovaj try/catch je postavljen zato sto moze doci do baga
        //           gde brisemo sortu koja je vezana za neku berbu
        try {
            $s->delete();
        } catch(\Exception $e) {
            return back()->withErrors(['Greska' => 'Ova sorta se pojavljuje u nekoj berbi']);
        }

        return redirect()->route("sorta.list")->with("success", "Sorta uspešno izbrisana!");
    }
}
