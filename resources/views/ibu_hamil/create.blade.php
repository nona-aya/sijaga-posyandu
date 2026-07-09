@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-3">
        Tambah Data Ibu Hamil
    </h2>


    <form action="{{ route('ibu_hamil.store') }}" method="POST">

        @csrf


        <div class="mb-3">
            <label class="form-label">
                NIK
            </label>

            <input type="text"
                   name="nik"
                   class="form-control"
                   placeholder="Masukkan NIK"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Nama Ibu
            </label>

            <input type="text"
                   name="nama_ibu"
                   class="form-control"
                   placeholder="Masukkan nama ibu hamil"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Tanggal Lahir
            </label>

            <input type="date"
                   name="tanggal_lahir"
                   class="form-control"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Usia Kehamilan (Minggu)
            </label>

            <input type="number"
                   name="usia_kehamilan"
                   class="form-control"
                   placeholder="Contoh: 20"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                HPHT
            </label>

            <input type="date"
                   name="hpht"
                   class="form-control"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Berat Badan (kg)
            </label>

            <input type="number"
                   name="berat_badan"
                   class="form-control"
                   placeholder="Contoh: 55"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Tinggi Badan (cm)
            </label>

            <input type="number"
                   name="tinggi_badan"
                   class="form-control"
                   placeholder="Contoh: 160"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Alamat
            </label>

            <textarea name="alamat"
                      class="form-control"
                      rows="3"
                      placeholder="Masukkan alamat"
                      required></textarea>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Keterangan
            </label>

            <textarea name="keterangan"
                      class="form-control"
                      rows="3"
                      placeholder="Tambahkan keterangan (opsional)"></textarea>
        </div>



        <button type="submit"
                class="btn btn-success">
            Simpan
        </button>


        <a href="{{ route('ibu_hamil.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>


    </form>


</div>

@endsection