<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\JadwalController;
use App\Http\Controllers\BalitaController;
use App\Http\Controllers\IbuHamilController;


/*
|--------------------------------------------------------------------------
| Dashboard
|--------------------------------------------------------------------------
*/

Route::get('/', [DashboardController::class, 'index'])
    ->name('dashboard');



/*
|--------------------------------------------------------------------------
| Modul Data Posyandu
|--------------------------------------------------------------------------
*/


Route::resource('jadwal', JadwalController::class);


Route::resource('balita', BalitaController::class);


Route::resource('ibu_hamil', IbuHamilController::class);




/*
|--------------------------------------------------------------------------
| Halaman Informasi
|--------------------------------------------------------------------------
*/


Route::get('/tentang', function () {

    return view('tentang');

})->name('tentang');



Route::get('/kontak', function () {

    return view('kontak');

})->name('kontak');