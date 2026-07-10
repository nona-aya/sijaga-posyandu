@extends('layouts.app')

@section('content')

<div class="container mt-5">


    <!-- Header -->

    <div class="text-center mb-5">

        <h1 class="fw-bold text-success">
            🌿 SIJAGA POSYANDU
        </h1>

        <p class="text-muted">
            Sistem Informasi Jadwal dan Data Posyandu
        </p>

    </div>




    <!-- Statistik -->

    <div class="row g-4">



        <div class="col-md-4">


            <div class="card shadow border-0 text-center">


                <div class="card-body">


                    <h1 class="text-success">
                        📅
                    </h1>


                    <h2 class="fw-bold">
                        {{ $jumlahJadwal }}
                    </h2>


                    <p class="text-muted">
                        Jadwal Posyandu
                    </p>



                    <a href="{{ route('jadwal.index') }}"
                       class="btn btn-success">

                        Lihat Jadwal

                    </a>


                </div>


            </div>


        </div>






        <div class="col-md-4">


            <div class="card shadow border-0 text-center">


                <div class="card-body">


                    <h1 class="text-success">
                        👶
                    </h1>


                    <h2 class="fw-bold">
                        {{ $jumlahBalita }}
                    </h2>


                    <p class="text-muted">
                        Data Balita
                    </p>



                    <a href="{{ route('balita.index') }}"
                       class="btn btn-success">

                        Lihat Data

                    </a>


                </div>


            </div>


        </div>







        <div class="col-md-4">


            <div class="card shadow border-0 text-center">


                <div class="card-body">


                    <h1 class="text-success">
                        🤰
                    </h1>


                    <h2 class="fw-bold">
                        {{ $jumlahIbuHamil }}
                    </h2>


                    <p class="text-muted">
                        Data Ibu Hamil
                    </p>



                    <a href="{{ route('ibu_hamil.index') }}"
                       class="btn btn-success">

                        Lihat Data

                    </a>


                </div>


            </div>


        </div>


    </div>






    <!-- Menu Cepat -->

    <div class="card shadow border-0 mt-5">


        <div class="card-body text-center">


            <h4 class="fw-bold mb-4">
                Menu Cepat
            </h4>



            <a href="{{ route('jadwal.create') }}"
               class="btn btn-outline-success m-2">

                + Tambah Jadwal

            </a>



            <a href="{{ route('balita.create') }}"
               class="btn btn-outline-success m-2">

                + Tambah Balita

            </a>



            <a href="{{ route('ibu_hamil.create') }}"
               class="btn btn-outline-success m-2">

                + Tambah Ibu Hamil

            </a>


        </div>


    </div>




</div>


@endsection