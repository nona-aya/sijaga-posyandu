@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-3">
        Data Balita
    </h2>


    <a href="{{ route('balita.create') }}" 
       class="btn btn-primary mb-3">
        + Tambah Balita
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
                <th>NIK</th>
                <th>Nama Balita</th>
                <th>Jenis Kelamin</th>
                <th>Tanggal Lahir</th>
                <th>Nama Orang Tua</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>

        </thead>



        <tbody>


        @forelse($balitas as $balita)


            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>


                <td>
                    {{ $balita->nik }}
                </td>


                <td>
                    {{ $balita->nama_balita }}
                </td>


                <td>
                    {{ $balita->jenis_kelamin }}
                </td>


                <td>
                    {{ $balita->tanggal_lahir }}
                </td>


                <td>
                    {{ $balita->nama_ortu }}
                </td>


                <td>
                    {{ $balita->berat_badan }} kg
                </td>


                <td>
                    {{ $balita->tinggi_badan }} cm
                </td>


                <td>
                    {{ $balita->alamat }}
                </td>



                <td>


                    <a href="{{ route('balita.edit', $balita->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>



                    <form action="{{ route('balita.destroy', $balita->id) }}"
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

                <td colspan="10" class="text-center">

                    Belum ada data balita

                </td>

            </tr>


        @endforelse



        </tbody>


    </table>


</div>


@endsection