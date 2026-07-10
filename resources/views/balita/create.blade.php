@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-3">
        Tambah Data Balita
    </h2>


    <form action="{{ route('balita.store') }}" method="POST">

        @csrf


        <div class="mb-3">
            <label class="form-label">
                NIK
            </label>

            <input type="text"
                   name="nik"
                   class="form-control"
                   maxlength="16"
                   placeholder="Masukkan NIK"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Nama Balita
            </label>

            <input type="text"
                   name="nama_balita"
                   class="form-control"
                   placeholder="Masukkan nama balita"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Jenis Kelamin
            </label>

            <select name="jenis_kelamin"
                    class="form-control"
                    required>

                <option value="">
                    -- Pilih Jenis Kelamin --
                </option>

                <option value="Laki-laki">
                    Laki-laki
                </option>

                <option value="Perempuan">
                    Perempuan
                </option>

            </select>
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
                Nama Orang Tua
            </label>

            <input type="text"
                   name="nama_ortu"
                   class="form-control"
                   placeholder="Masukkan nama orang tua"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Berat Badan (kg)
            </label>

            <input type="number"
                   name="berat_badan"
                   class="form-control"
                   placeholder="Contoh: 10"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Tinggi Badan (cm)
            </label>

            <input type="number"
                   name="tinggi_badan"
                   class="form-control"
                   placeholder="Contoh: 80"
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



        <button type="submit"
                class="btn btn-success">
            Simpan
        </button>


        <a href="{{ route('balita.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>


    </form>


</div>

@endsection