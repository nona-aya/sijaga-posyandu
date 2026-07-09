<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use App\Models\Balita;
use App\Models\IbuHamil;

class DashboardController extends Controller
{
    public function index()
    {
        $jumlahJadwal = Jadwal::count();

        $jumlahBalita = Balita::count();

        $jumlahIbuHamil = IbuHamil::count();


        return view('dashboard', compact(
            'jumlahJadwal',
            'jumlahBalita',
            'jumlahIbuHamil'
        ));
    }
}