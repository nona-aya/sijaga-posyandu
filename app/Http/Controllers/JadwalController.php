<?php

namespace App\Http\Controllers;

use App\Models\Jadwal;
use Illuminate\Http\Request;

class JadwalController extends Controller
{
    /**
     * Menampilkan semua data jadwal
     */
    public function index()
    {
        $jadwals = Jadwal::all();

        return view('jadwal.index', compact('jadwals'));
    }

    /**
     * Menampilkan form tambah jadwal
     */
    public function create()
    {
        return view('jadwal.create');
    }

    /**
     * Menyimpan data jadwal
     */
    public function store(Request $request)
    {
        $request->validate([
            'tanggal'   => 'required',
            'waktu'     => 'required',
            'lokasi'    => 'required',
            'kegiatan'  => 'required',
        ]);

        Jadwal::create([
            'tanggal'    => $request->tanggal,
            'waktu'      => $request->waktu,
            'lokasi'     => $request->lokasi,
            'kegiatan'   => $request->kegiatan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal berhasil ditambahkan.');
    }

    /**
     * Menampilkan detail jadwal
     */
    public function show(Jadwal $jadwal)
    {
        return view('jadwal.show', compact('jadwal'));
    }

    /**
     * Menampilkan form edit
     */
    public function edit(Jadwal $jadwal)
    {
        return view('jadwal.edit', compact('jadwal'));
    }

    /**
     * Mengupdate data jadwal
     */
    public function update(Request $request, Jadwal $jadwal)
    {
        $request->validate([
            'tanggal'   => 'required',
            'waktu'     => 'required',
            'lokasi'    => 'required',
            'kegiatan'  => 'required',
        ]);

        $jadwal->update([
            'tanggal'    => $request->tanggal,
            'waktu'      => $request->waktu,
            'lokasi'     => $request->lokasi,
            'kegiatan'   => $request->kegiatan,
            'keterangan' => $request->keterangan,
        ]);

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal berhasil diperbarui.');
    }

    /**
     * Menghapus data jadwal
     */
    public function destroy(Jadwal $jadwal)
    {
        $jadwal->delete();

        return redirect()->route('jadwal.index')
            ->with('success', 'Jadwal berhasil dihapus.');
    }
}