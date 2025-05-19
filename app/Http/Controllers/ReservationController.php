<?php

namespace App\Http\Controllers;

use App\Models\Reservation;
use App\Models\Sorta;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ReservationController extends Controller
{
    public function list() {
        return view('reservation/list', [
            "reservations" => Auth::user()->reservations,
        ]);
    }

    public function create() {
        return view('reservation/add', [
            "sortas" => Sorta::all(),
        ]);
    }

    public function store(Request $req) {
        $valid = $req->validate([
            "sorta_id" => "required",
            "kilos_reserved" => "required|numeric|min:1",
        ]);

        $valid['user_id'] = Auth::user()->id;
        $valid['date_reserved'] = now();

        Reservation::create($valid);

        return redirect()->route('reservation.list')->with('success', 'Uspešno kreirana rezervacija!');
    }

    public function edit($id) {
        $tr = Reservation::find($id);

        // korisnik ne sme da menja tudje rezervacije
        if ($tr->user_id !== Auth::user()->id) {
            abort(403, 'Nemate dozvolu da izmenite ovu rezervaciju.');
        }

        return view('reservation/edit', [
            "tr" => $tr,
        ]);
    }

    public function update(Request $req, $id) {
        $valid = $req->validate([
            "kilos_reserved" => "required|numeric|min:1",
        ]);

        $r = Reservation::find($id);
        $r->kilos_reserved = $valid['kilos_reserved'];
        $r->save();

        return redirect()->route('reservation.list')->with('success', 'Uspešno izmenjena rezervacija!');
    }

    public function destroy($id) {
        $r = Reservation::find($id);
        $r->delete();

        if (Auth::user()->role === 'user')
            return redirect()->route("reservation.list")->with("success", "Rezervacija uspešno otkazana!");
        else
            return redirect()->route("admin.index")->with("success", "Rezervacija uspešno otkazana!");
    }

}
