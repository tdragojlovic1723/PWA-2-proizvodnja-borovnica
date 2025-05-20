<?php

use App\Http\Controllers\BerbaController;
use App\Http\Controllers\PlantazaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use App\Http\Controllers\SortaController;
use App\Models\Berba;
use App\Models\Plantaza;
use App\Models\Reservation;
use App\Models\Sorta;
use Illuminate\Support\Facades\Route;

// public
Route::get('/', function () {
    return view('welcome');
})->name('index');

Route::get('/katalog', function () {
    return view('katalog', [
        "plantaze" => Plantaza::all(),
        "sorte" => Sorta::all(),
    ]);
})->name('katalog');

Route::get('/kontakt', function () {
    return view('kontakt');
})->name('kontakt');

// admin, editor
Route::middleware(['auth', 'role:admin,editor'])->group(function(){
    Route::get('/admin//', function() {
        $podaci = Berba::brojBerbiPoVrstiIzZemlje('Srbija');
        $podaci2 = Reservation::brojRezervacijaPoMesecima();
        $reservations = Reservation::all();

        return view('admin.index', [
            "pie_chart_podaci" => $podaci,
            "bar_chart_podaci" => $podaci2,
            "reservations" => $reservations,
        ]);
    })->name('admin.index');

    // Plantaze
    Route::get('/admin/plantaza-list', [PlantazaController::class, 'list'])->name('plantaza.list');

    Route::get('/admin/plantaza-create', [PlantazaController::class, 'create'])->name('plantaza.create');
    Route::post('/admin/plantaza-create', [PlantazaController::class, 'store'])->name('plantaza.store');

    Route::get('/admin/plantaza-edit/{id}', [PlantazaController::class, 'edit'])->name('plantaza.edit');
    Route::post('/admin/plantaza-edit/{id}', [PlantazaController::class, 'update'])->name('plantaza.update');

    Route::delete('/admin/plantaza-delete/{id}', [PlantazaController::class, 'destroy'])->name('plantaza.destroy');

    // Sorte
    Route::get('/admin/sorta-list', [SortaController::class, 'list'])->name('sorta.list');

    Route::get('/admin/sorta-create', [SortaController::class, 'create'])->name('sorta.create');
    Route::post('/admin/sorta-create', [SortaController::class, 'store'])->name('sorta.store');

    Route::get('/admin/sorta-edit/{id}', [SortaController::class, 'edit'])->name('sorta.edit');
    Route::post('/admin/sorta-edit/{id}', [SortaController::class, 'update'])->name('sorta.update');

    Route::delete('/admin/sorta-delete/{id}', [SortaController::class, 'destroy'])->name('sorta.destroy');

    // Berbe
    Route::get('/admin/berba-list', [BerbaController::class, 'list'])->name('berba.list');

    Route::get('/admin/berba-create', [BerbaController::class, 'create'])->name('berba.create');

    Route::get('/admin/berba-edit/{id}', [BerbaController::class, 'edit'])->name('berba.edit');

    Route::delete('/admin/berba-delete/{id}', [BerbaController::class, 'destroy'])->name('berba.destroy');

    // Rezervacije
    Route::delete('/admin/reservation-delete/{id}', [ReservationController::class, 'destroy'])->name('admin.reservation.destroy');
});

// regular user
Route::middleware(['auth', 'role:user,editor,admin'])->group(function(){
    Route::get('/reservation-list', [ReservationController::class, 'list'])->name('reservation.list');

    Route::get('/reservation-create', [ReservationController::class, 'create'])->name('reservation.create');
    Route::post('/reservation-create', [ReservationController::class, 'store'])->name('reservation.store');

    Route::get('/reservation-edit/{id}', [ReservationController::class, 'edit'])->name('reservation.edit');
    Route::post('/reservation-edit/{id}', [ReservationController::class, 'update'])->name('reservation.update');

    Route::delete('/reservation-delete/{id}', [ReservationController::class, 'destroy'])->name('reservation.destroy');
});





Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
