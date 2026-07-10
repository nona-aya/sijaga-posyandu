<?php

namespace App\Http\Controllers;

use App\Models\Balita;
use Illuminate\Http\Request;

class BalitaController extends Controller
{

    /**
     * Menampilkan data balita
     */
    public function index(Request $request)
    {

        $keyword = $request->keyword;


        $balitas = Balita::when($keyword, function ($query) use ($keyword) {

            $query->where('nama_balita', 'like', '%' . $keyword . '%')
                  ->orWhere('nik', 'like', '%' . $keyword . '%');

        })
        ->get();



        return view('balita.index', compact('balitas'));

    }



    /**
     * Halaman tambah data
     */
    public function create()
    {
        return view('balita.create');
    }




    /**
     * Menyimpan data balita
     */
    public function store(Request $request)
    {

        $request->validate([

            'nik' => 'required',
            'nama_balita' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ortu' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'alamat' => 'required',

        ]);



        Balita::create([

            'nik' => $request->nik,
            'nama_balita' => $request->nama_balita,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ortu' => $request->nama_ortu,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'alamat' => $request->alamat,

        ]);



        return redirect()
            ->route('balita.index')
            ->with('success','Data balita berhasil ditambahkan');

    }





    /**
     * Detail data
     */
    public function show(Balita $balitum)
    {
        return view('balita.show', compact('balitum'));
    }





    /**
     * Halaman edit
     */
    public function edit(Balita $balitum)
    {
        return view('balita.edit', compact('balitum'));
    }





    /**
     * Update data
     */
    public function update(Request $request, Balita $balitum)
    {


        $request->validate([

            'nik' => 'required',
            'nama_balita' => 'required',
            'jenis_kelamin' => 'required',
            'tanggal_lahir' => 'required',
            'nama_ortu' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'alamat' => 'required',

        ]);



        $balitum->update([

            'nik' => $request->nik,
            'nama_balita' => $request->nama_balita,
            'jenis_kelamin' => $request->jenis_kelamin,
            'tanggal_lahir' => $request->tanggal_lahir,
            'nama_ortu' => $request->nama_ortu,
            'berat_badan' => $request->berat_badan,
            'tinggi_badan' => $request->tinggi_badan,
            'alamat' => $request->alamat,

        ]);



        return redirect()
            ->route('balita.index')
            ->with('success','Data balita berhasil diperbarui');

    }





    /**
     * Hapus data
     */
    public function destroy(Balita $balitum)
    {

        $balitum->delete();


        return redirect()
            ->route('balita.index')
            ->with('success','Data balita berhasil dihapus');

    }


}