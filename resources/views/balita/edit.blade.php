@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-3">
        Edit Data Balita
    </h2>


    <form action="{{ route('balita.update', $balitum->id) }}" method="POST">

        @csrf
        @method('PUT')


        <div class="mb-3">
            <label class="form-label">
                NIK
            </label>

            <input type="text"
                   name="nik"
                   class="form-control"
                   value="{{ $balitum->nik }}"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Nama Balita
            </label>

            <input type="text"
                   name="nama_balita"
                   class="form-control"
                   value="{{ $balitum->nama_balita }}"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Jenis Kelamin
            </label>

            <select name="jenis_kelamin"
                    class="form-control"
                    required>

                <option value="Laki-laki"
                    {{ $balitum->jenis_kelamin == 'Laki-laki' ? 'selected' : '' }}>
                    Laki-laki
                </option>


                <option value="Perempuan"
                    {{ $balitum->jenis_kelamin == 'Perempuan' ? 'selected' : '' }}>
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
                   value="{{ $balitum->tanggal_lahir }}"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Nama Orang Tua
            </label>

            <input type="text"
                   name="nama_ortu"
                   class="form-control"
                   value="{{ $balitum->nama_ortu }}"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Berat Badan (kg)
            </label>

            <input type="number"
                   name="berat_badan"
                   class="form-control"
                   value="{{ $balitum->berat_badan }}"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Tinggi Badan (cm)
            </label>

            <input type="number"
                   name="tinggi_badan"
                   class="form-control"
                   value="{{ $balitum->tinggi_badan }}"
                   required>
        </div>



        <div class="mb-3">
            <label class="form-label">
                Alamat
            </label>

            <textarea name="alamat"
                      class="form-control"
                      rows="3"
                      required>{{ $balitum->alamat }}</textarea>
        </div>



        <button type="submit"
                class="btn btn-success">
            Update
        </button>


        <a href="{{ route('balita.index') }}"
           class="btn btn-secondary">
            Kembali
        </a>


    </form>

</div>

@endsection