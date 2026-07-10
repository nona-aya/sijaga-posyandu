<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\IbuHamilController;
use App\Http\Controllers\ProfileController;

/*
|--------------------------------------------------------------------------
| Halaman Publik
|--------------------------------------------------------------------------
*/

Route::get('/', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/tentang', function () {
    return view('tentang');
})->name('tentang');

Route::get('/kontak', function () {
    return view('kontak');
})->name('kontak');

/*
|--------------------------------------------------------------------------
| Halaman Admin (Harus Login)
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {

    Route::resource('jadwal', JadwalController::class);

    Route::resource('balita', BalitaController::class);

    Route::resource('ibu_hamil', IbuHamilController::class);

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});

/*
|--------------------------------------------------------------------------
| Auth Breeze
|--------------------------------------------------------------------------
*/

require __DIR__.'/auth.php';