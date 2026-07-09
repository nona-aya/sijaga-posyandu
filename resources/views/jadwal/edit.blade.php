<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Edit Jadwal</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h2 class="mb-4 text-warning">
        Edit Jadwal Posyandu
    </h2>

    <form action="{{ route('jadwal.update', $jadwal->id) }}" method="POST">

        @csrf
        @method('PUT')

        <div class="mb-3">
            <label>Tanggal</label>
            <input type="date" name="tanggal" class="form-control" value="{{ $jadwal->tanggal }}">
        </div>

        <div class="mb-3">
            <label>Waktu</label>
            <input type="time" name="waktu" class="form-control" value="{{ $jadwal->waktu }}">
        </div>

        <div class="mb-3">
            <label>Lokasi</label>
            <input type="text" name="lokasi" class="form-control" value="{{ $jadwal->lokasi }}">
        </div>

        <div class="mb-3">
            <label>Kegiatan</label>
            <input type="text" name="kegiatan" class="form-control" value="{{ $jadwal->kegiatan }}">
        </div>

        <div class="mb-3">
            <label>Keterangan</label>
            <textarea name="keterangan" class="form-control">{{ $jadwal->keterangan }}</textarea>
        </div>

        <button type="submit" class="btn btn-warning">
            Update
        </button>

        <a href="{{ route('jadwal.index') }}" class="btn btn-secondary">
            Kembali
        </a>

    </form>

</div>

</body>
</html>