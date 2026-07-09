<?php

namespace App\Http\Controllers;

use App\Models\IbuHamil;
use Illuminate\Http\Request;

class IbuHamilController extends Controller
{
    /**
     * Menampilkan semua data ibu hamil
     */
    public function index()
    {
        $ibuHamils = IbuHamil::all();

        return view('ibu_hamil.index', compact('ibuHamils'));
    }


    /**
     * Menampilkan form tambah ibu hamil
     */
    public function create()
    {
        return view('ibu_hamil.create');
    }


    /**
     * Menyimpan data ibu hamil
     */
    public function store(Request $request)
    {
        $request->validate([
            'nik'              => 'required|unique:ibu_hamils',
            'nama_ibu'         => 'required',
            'tanggal_lahir'    => 'required',
            'usia_kehamilan'   => 'required',
            'hpht'             => 'required',
            'berat_badan'      => 'required',
            'tinggi_badan'     => 'required',
            'alamat'           => 'required',
        ]);


        IbuHamil::create([
            'nik'              => $request->nik,
            'nama_ibu'         => $request->nama_ibu,
            'tanggal_lahir'    => $request->tanggal_lahir,
            'usia_kehamilan'   => $request->usia_kehamilan,
            'hpht'             => $request->hpht,
            'berat_badan'      => $request->berat_badan,
            'tinggi_badan'     => $request->tinggi_badan,
            'alamat'           => $request->alamat,
            'keterangan'       => $request->keterangan,
        ]);


        return redirect()->route('ibu_hamil.index')
            ->with('success', 'Data ibu hamil berhasil ditambahkan.');
    }


    /**
     * Menampilkan detail ibu hamil
     */
    public function show(IbuHamil $ibuHamil)
    {
        return view('ibu_hamil.show', compact('ibuHamil'));
    }


    /**
     * Menampilkan form edit
     */
    public function edit(IbuHamil $ibuHamil)
    {
        return view('ibu_hamil.edit', compact('ibuHamil'));
    }


    /**
     * Mengupdate data ibu hamil
     */
    public function update(Request $request, IbuHamil $ibuHamil)
    {
        $request->validate([
            'nik'              => 'required',
            'nama_ibu'         => 'required',
            'tanggal_lahir'    => 'required',
            'usia_kehamilan'   => 'required',
            'hpht'             => 'required',
            'berat_badan'      => 'required',
            'tinggi_badan'     => 'required',
            'alamat'           => 'required',
        ]);


        $ibuHamil->update([
            'nik'              => $request->nik,
            'nama_ibu'         => $request->nama_ibu,
            'tanggal_lahir'    => $request->tanggal_lahir,
            'usia_kehamilan'   => $request->usia_kehamilan,
            'hpht'             => $request->hpht,
            'berat_badan'      => $request->berat_badan,
            'tinggi_badan'     => $request->tinggi_badan,
            'alamat'           => $request->alamat,
            'keterangan'       => $request->keterangan,
        ]);


        return redirect()->route('ibu_hamil.index')
            ->with('success', 'Data ibu hamil berhasil diperbarui.');
    }


    /**
     * Menghapus data ibu hamil
     */
    public function destroy(IbuHamil $ibuHamil)
    {
        $ibuHamil->delete();

        return redirect()->route('ibu_hamil.index')
            ->with('success', 'Data ibu hamil berhasil dihapus.');
    }
}