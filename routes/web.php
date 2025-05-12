<?php

use App\Http\Controllers\BerbaController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ReservationController;
use Illuminate\Support\Facades\Route;

// public
Route::get('/', function () {
    return view('welcome');
});

Route::get('/katalog', function () {
    return view('welcome');
});

Route::get('/kontakt', function () {
    return view('kontakt');
});


// admin, editor
Route::middleware(['auth', 'role:admin,editor'])->group(function(){
    Route::get('/admin/dashboard', function() {
        return view('welcome');
    });
});


// regular user
Route::middleware(['auth', 'role:user'])->group(function(){
    Route::get('/reservation-list', [ReservationController::class, 'list'])->name('reservation.list');
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
