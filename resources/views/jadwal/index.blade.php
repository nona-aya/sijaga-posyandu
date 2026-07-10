@extends('layouts.app')

@section('content')

<div class="container mt-4">


    <div class="d-flex justify-content-between align-items-center mb-4">

        <h2 class="fw-bold text-success">
            📅 Data Jadwal Posyandu
        </h2>


        <a href="{{ route('jadwal.create') }}"
           class="btn btn-success">

            + Tambah Jadwal

        </a>


    </div>



    @if(session('success'))

        <div class="alert alert-success">

            {{ session('success') }}

        </div>

    @endif




    <div class="card shadow border-0">


        <div class="card-body">


            <div class="table-responsive">


                <table class="table table-bordered table-hover align-middle">


                    <thead class="table-success">


                        <tr>

                            <th width="5%">
                                No
                            </th>

                            <th>
                                Kegiatan
                            </th>

                            <th>
                                Tanggal
                            </th>

                            <th>
                                Waktu
                            </th>

                            <th>
                                Lokasi
                            </th>

                            <th>
                                Keterangan
                            </th>

                            <th width="15%">
                                Aksi
                            </th>

                        </tr>


                    </thead>



                    <tbody>


                    @forelse($jadwals as $jadwal)


                        <tr>


                            <td>
                                {{ $loop->iteration }}
                            </td>


                            <td>
                                {{ $jadwal->kegiatan }}
                            </td>


                            <td>
                                {{ \Carbon\Carbon::parse($jadwal->tanggal)->format('d-m-Y') }}
                            </td>


                            <td>
                                {{ $jadwal->waktu }}
                            </td>


                            <td>
                                {{ $jadwal->lokasi }}
                            </td>


                            <td>
                                {{ $jadwal->keterangan ?? '-' }}
                            </td>



                            <td>


                                <a href="{{ route('jadwal.edit',$jadwal->id) }}"
                                   class="btn btn-warning btn-sm">

                                    ✏️

                                </a>



                                <form action="{{ route('jadwal.destroy',$jadwal->id) }}"
                                      method="POST"
                                      class="d-inline">


                                    @csrf

                                    @method('DELETE')


                                    <button type="submit"
                                            class="btn btn-danger btn-sm"
                                            onclick="return confirm('Yakin ingin menghapus jadwal ini?')">

                                        🗑️

                                    </button>


                                </form>


                            </td>


                        </tr>



                    @empty


                        <tr>

                            <td colspan="7"
                                class="text-center text-muted">

                                Belum ada data jadwal.

                            </td>

                        </tr>


                    @endforelse



                    </tbody>


                </table>


            </div>


        </div>


    </div>



</div>


@endsection