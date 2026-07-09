@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-3">
        Edit Data Ibu Hamil
    </h2>


    <form action="{{ route('ibu_hamil.update', $ibuHamil->id) }}" method="POST">

        @csrf
        @method('PUT')


        <div class="mb-3">
            <label>NIK</label>

            <input type="text"
                   name="nik"
                   class="form-control"
                   value="{{ $ibuHamil->nik }}"
                   required>
        </div>



        <div class="mb-3">
            <label>Nama Ibu</label>

            <input type="text"
                   name="nama_ibu"
                   class="form-control"
                   value="{{ $ibuHamil->nama_ibu }}"
                   required>
        </div>



        <div class="mb-3">
            <label>Tanggal Lahir</label>

            <input type="date"
                   name="tanggal_lahir"
                   class="form-control"
                   value="{{ $ibuHamil->tanggal_lahir }}"
                   required>
        </div>



        <div class="mb-3">
            <label>Usia Kehamilan (Minggu)</label>

            <input type="number"
                   name="usia_kehamilan"
                   class="form-control"
                   value="{{ $ibuHamil->usia_kehamilan }}"
                   required>
        </div>



        <div class="mb-3">
            <label>HPHT</label>

            <input type="date"
                   name="hpht"
                   class="form-control"
                   value="{{ $ibuHamil->hpht }}"
                   required>
        </div>



        <div class="mb-3">
            <label>Berat Badan (kg)</label>

            <input type="number"
                   name="berat_badan"
                   class="form-control"
                   value="{{ $ibuHamil->berat_badan }}"
                   required>
        </div>



        <div class="mb-3">
            <label>Tinggi Badan (cm)</label>

            <input type="number"
                   name="tinggi_badan"
                   class="form-control"
                   value="{{ $ibuHamil->tinggi_badan }}"
                   required>
        </div>



        <div class="mb-3">
            <label>Alamat</label>

            <textarea name="alamat"
                      class="form-control"
                      required>{{ $ibuHamil->alamat }}</textarea>
        </div>



        <div class="mb-3">
            <label>Keterangan</label>

            <textarea name="keterangan"
                      class="form-control">{{ $ibuHamil->keterangan }}</textarea>
        </div>



        <button type="submit"
                class="btn btn-success">
            Update
        </button>


        <a href="{{ route('ibu_hamil.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>


    </form>


</div>

@endsection