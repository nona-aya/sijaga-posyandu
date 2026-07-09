<!DOCTYPE html>
<html lang="id">

<head>

    <meta charset="UTF-8">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        SIJAGA POSYANDU
    </title>


    <!-- Bootstrap -->

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" 
          rel="stylesheet">


</head>


<body>


<!-- Navbar -->

<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">


    <div class="container">


        <a class="navbar-brand fw-bold"
           href="{{ route('dashboard') }}">

            🌿 SIJAGA POSYANDU

        </a>



        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>



        <div class="collapse navbar-collapse"
             id="navbarMenu">


            <ul class="navbar-nav ms-auto">


                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('dashboard') }}">

                        🏠 Dashboard

                    </a>

                </li>



                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('jadwal.index') }}">

                        📅 Jadwal

                    </a>

                </li>



                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('balita.index') }}">

                        👶 Balita

                    </a>

                </li>



                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('ibu_hamil.index') }}">

                        🤰 Ibu Hamil

                    </a>

                </li>



                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('tentang') }}">

                        ℹ️ Tentang

                    </a>

                </li>



                <li class="nav-item">

                    <a class="nav-link"
                       href="{{ route('kontak') }}">

                        ☎️ Kontak

                    </a>

                </li>


            </ul>


        </div>


    </div>


</nav>





<!-- Konten Halaman -->


<main>

    @yield('content')

</main>





<!-- Footer -->


<footer class="bg-light text-center mt-5 py-3">


    <p class="mb-0 text-muted">

        © {{ date('Y') }} SIJAGA POSYANDU

        <br>

        Sistem Informasi Jadwal dan Data Posyandu

    </p>


</footer>





<!-- Bootstrap JS -->


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>


</body>


</html>