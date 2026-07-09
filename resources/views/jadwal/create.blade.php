@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-3">Tambah Jadwal Posyandu</h2>

    <form action="{{ route('jadwal.store') }}" method="POST">

        @csrf

        <div class="mb-3">
            <label>Kegiatan</label>
            <input type="text"
                   name="kegiatan"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date"
                   name="tanggal"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Waktu</label>
            <input type="time"
                   name="waktu"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text"
                   name="lokasi"
                   class="form-control"
                   required>
        </div>

        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan"
                      class="form-control"></textarea>
        </div>

        <button type="submit" class="btn btn-success">
            Simpan
        </button>

        <a href="{{ route('jadwal.index') }}" 
           class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

@endsection