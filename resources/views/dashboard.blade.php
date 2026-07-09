@extends('layouts.app')

@section('content')

<div class="container mt-4">


    <div class="text-center mb-4">

        <h2 class="fw-bold">
            SIJAGA POSYANDU
        </h2>

        <p class="text-muted">
            Sistem Informasi Jadwal dan Data Posyandu
        </p>

    </div>



    <div class="row g-4">


        <!-- Jadwal -->

        <div class="col-md-4">

            <div class="card shadow border-0 h-100">

                <div class="card-body text-center">

                    <div class="fs-1 mb-3">
                        📅
                    </div>


                    <h5 class="fw-bold">
                        Jadwal Posyandu
                    </h5>


                    <h1 class="text-primary fw-bold">
                        {{ $jumlahJadwal }}
                    </h1>


                    <p class="text-muted">
                        Total Jadwal Kegiatan
                    </p>


                    <a href="{{ route('jadwal.index') }}"
                       class="btn btn-primary">
                        Lihat Jadwal
                    </a>


                </div>

            </div>

        </div>




        <!-- Balita -->

        <div class="col-md-4">

            <div class="card shadow border-0 h-100">

                <div class="card-body text-center">


                    <div class="fs-1 mb-3">
                        👶
                    </div>


                    <h5 class="fw-bold">
                        Data Balita
                    </h5>


                    <h1 class="text-success fw-bold">
                        {{ $jumlahBalita }}
                    </h1>


                    <p class="text-muted">
                        Total Data Balita
                    </p>


                    <a href="{{ route('balita.index') }}"
                       class="btn btn-success">
                        Lihat Balita
                    </a>


                </div>

            </div>

        </div>




        <!-- Ibu Hamil -->

        <div class="col-md-4">

            <div class="card shadow border-0 h-100">

                <div class="card-body text-center">


                    <div class="fs-1 mb-3">
                        🤰
                    </div>


                    <h5 class="fw-bold">
                        Data Ibu Hamil
                    </h5>


                    <h1 class="text-danger fw-bold">
                        {{ $jumlahIbuHamil }}
                    </h1>


                    <p class="text-muted">
                        Total Data Ibu Hamil
                    </p>


                    <a href="{{ route('ibu_hamil.index') }}"
                       class="btn btn-danger">
                        Lihat Ibu Hamil
                    </a>


                </div>

            </div>

        </div>


    </div>



    <div class="mt-5 text-center">

        <p class="text-muted">
            © {{ date('Y') }} SIJAGA POSYANDU
        </p>

    </div>


</div>


@endsection