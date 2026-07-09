```blade
@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-3">Data Jadwal Posyandu</h2>

    <a href="{{ route('jadwal.create') }}" class="btn btn-primary mb-3">
        + Tambah Jadwal
    </a>

    @if(session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped">
        <thead class="table-success">
            <tr>
                <th>No</th>
                <th>Kegiatan</th>
                <th>Tanggal</th>
                <th>Waktu</th>
                <th>Lokasi</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>
        </thead>

        <tbody>

        @forelse($jadwals as $jadwal)

        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $jadwal->kegiatan }}</td>
            <td>{{ $jadwal->tanggal }}</td>
            <td>{{ $jadwal->waktu }}</td>
            <td>{{ $jadwal->lokasi }}</td>
            <td>{{ $jadwal->keterangan }}</td>
            <td>

                <a href="{{ route('jadwal.edit', $jadwal->id) }}"
                   class="btn btn-warning btn-sm">
                    Edit
                </a>

                <form action="{{ route('jadwal.destroy', $jadwal->id) }}"
                      method="POST"
                      class="d-inline">

                    @csrf
                    @method('DELETE')

                    <button type="submit"
                            class="btn btn-danger btn-sm"
                            onclick="return confirm('Yakin ingin menghapus data ini?')">
                        Hapus
                    </button>

                </form>

            </td>
        </tr>

        @empty

        <tr>
            <td colspan="7" class="text-center">
                Belum ada data jadwal.
            </td>
        </tr>

        @endforelse

        </tbody>
    </table>

</div>

@endsection
```
