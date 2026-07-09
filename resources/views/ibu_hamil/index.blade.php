@extends('layouts.app')

@section('content')

<div class="container mt-4">

    <h2 class="mb-3">
        Data Ibu Hamil
    </h2>


    <a href="{{ route('ibu_hamil.create') }}"
       class="btn btn-primary mb-3">
        + Tambah Ibu Hamil
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
                <th>Nama Ibu</th>
                <th>Tanggal Lahir</th>
                <th>Usia Kehamilan</th>
                <th>HPHT</th>
                <th>Berat Badan</th>
                <th>Tinggi Badan</th>
                <th>Alamat</th>
                <th>Keterangan</th>
                <th>Aksi</th>
            </tr>

        </thead>



        <tbody>

        @forelse($ibuHamils as $ibuHamil)

            <tr>

                <td>
                    {{ $loop->iteration }}
                </td>


                <td>
                    {{ $ibuHamil->nik }}
                </td>


                <td>
                    {{ $ibuHamil->nama_ibu }}
                </td>


                <td>
                    {{ $ibuHamil->tanggal_lahir }}
                </td>


                <td>
                    {{ $ibuHamil->usia_kehamilan }} minggu
                </td>


                <td>
                    {{ $ibuHamil->hpht }}
                </td>


                <td>
                    {{ $ibuHamil->berat_badan }} kg
                </td>


                <td>
                    {{ $ibuHamil->tinggi_badan }} cm
                </td>


                <td>
                    {{ $ibuHamil->alamat }}
                </td>


                <td>
                    {{ $ibuHamil->keterangan ?? '-' }}
                </td>



                <td>

                    <a href="{{ route('ibu_hamil.edit', $ibuHamil->id) }}"
                       class="btn btn-warning btn-sm">
                        Edit
                    </a>


                    <form action="{{ route('ibu_hamil.destroy', $ibuHamil->id) }}"
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

                <td colspan="11" class="text-center">
                    Belum ada data ibu hamil
                </td>

            </tr>


        @endforelse


        </tbody>


    </table>


</div>

@endsection