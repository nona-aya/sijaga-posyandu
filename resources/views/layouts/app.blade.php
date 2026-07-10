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


@include('layouts.navigation')



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




<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js">
</script>


</body>


</html>