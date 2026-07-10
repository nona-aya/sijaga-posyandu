<nav class="navbar navbar-expand-lg navbar-dark bg-success shadow">

    <div class="container">

        <a class="navbar-brand fw-bold" href="{{ route('dashboard') }}">
            🌿 SIJAGA POSYANDU
        </a>


        <button class="navbar-toggler"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#navbarMenu">

            <span class="navbar-toggler-icon"></span>

        </button>


        <div class="collapse navbar-collapse" id="navbarMenu">

            <ul class="navbar-nav ms-auto">


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('dashboard') }}">
                        🏠 Dashboard
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('jadwal.index') }}">
                        📅 Jadwal
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('balita.index') }}">
                        👶 Balita
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('ibu_hamil.index') }}">
                        🤰 Ibu Hamil
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('tentang') }}">
                        ℹ️ Tentang
                    </a>
                </li>


                <li class="nav-item">
                    <a class="nav-link" href="{{ route('kontak') }}">
                        ☎️ Kontak
                    </a>
                </li>


                {{-- Jika belum login --}}
                @guest

                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">
                        🔐 Login
                    </a>
                </li>


                @else


                {{-- Jika sudah login --}}

                <li class="nav-item dropdown">


                    <a class="nav-link dropdown-toggle"
                       href="#"
                       role="button"
                       data-bs-toggle="dropdown">

                        👤 {{ Auth::user()->name }}

                    </a>


                    <ul class="dropdown-menu dropdown-menu-end">


                        <li>
                            <a class="dropdown-item"
                               href="{{ route('profile.edit') }}">

                                Profil

                            </a>
                        </li>


                        <li>

                            <form method="POST"
                                  action="{{ route('logout') }}">

                                @csrf

                                <button type="submit"
                                        class="dropdown-item">

                                    Logout

                                </button>

                            </form>

                        </li>


                    </ul>


                </li>


                @endguest


            </ul>


        </div>


    </div>


</nav>