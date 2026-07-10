<?php

namespace App\Http\Controllers;

use App\Models\IbuHamil;
use Illuminate\Http\Request;

class IbuHamilController extends Controller
{

    public function index(Request $request)
    {

        $keyword = $request->keyword;


        $ibuHamils = IbuHamil::when($keyword, function ($query) use ($keyword) {


            $query->where('nama_ibu', 'like', '%' . $keyword . '%')
                  ->orWhere('nik', 'like', '%' . $keyword . '%');


        })
        ->get();



        return view('ibu_hamil.index', compact('ibuHamils'));

    }




    public function create()
    {
        return view('ibu_hamil.create');
    }




    public function store(Request $request)
    {

        $request->validate([

            'nik' => 'required',
            'nama_ibu' => 'required',
            'tanggal_lahir' => 'required',
            'usia_kehamilan' => 'required',
            'hpht' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'alamat' => 'required',

        ]);



        IbuHamil::create($request->all());



        return redirect()
            ->route('ibu_hamil.index')
            ->with('success','Data ibu hamil berhasil ditambahkan');

    }




    public function show(IbuHamil $ibuHamil)
    {
        return view('ibu_hamil.show', compact('ibuHamil'));
    }




    public function edit(IbuHamil $ibuHamil)
    {
        return view('ibu_hamil.edit', compact('ibuHamil'));
    }





    public function update(Request $request, IbuHamil $ibuHamil)
    {

        $request->validate([

            'nik' => 'required',
            'nama_ibu' => 'required',
            'tanggal_lahir' => 'required',
            'usia_kehamilan' => 'required',
            'hpht' => 'required',
            'berat_badan' => 'required',
            'tinggi_badan' => 'required',
            'alamat' => 'required',

        ]);



        IbuHamil::where('id', $ibuHamil->id)
                ->update($request->all());



        return redirect()
            ->route('ibu_hamil.index')
            ->with('success','Data ibu hamil berhasil diperbarui');

    }





    public function destroy(IbuHamil $ibuHamil)
    {

        $ibuHamil->delete();



        return redirect()
            ->route('ibu_hamil.index')
            ->with('success','Data ibu hamil berhasil dihapus');

    }


}