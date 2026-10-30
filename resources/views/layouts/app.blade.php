<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>
        @yield('title', 'LaporBanjir')
    </title>

<link rel="stylesheet" href="{{ asset('css/style.css') }}?v=2">
</head>

<body>

    <header class="header">

        <div class="container navbar">

            <a href="{{ route('laporan.index') }}" class="logo">
                LaporBanjir
            </a>

           
<nav>
    <a href="{{ route('laporan.form') }}">Lapor Banjir</a>

    @guest
        <a href="{{ route('login') }}">Login</a>
        <a href="{{ route('register') }}">Register</a>
    @endguest

    @auth
        <a href="{{ route('laporan.index') }}">Daftar Laporan</a>
        <a href="{{ route('profil') }}">Profil Petugas</a>

        <form action="{{ route('logout') }}" method="POST">
            @csrf
            <button type="submit">Logout</button>
        </form>
    @endauth
</nav>
        </div>

    </header>
    

    <main>

        @yield('content')

    </main>

    <footer class="footer">

        <p>
            &copy; 2026 LaporBanjir - BPBD Kabupaten Bandung
        </p>

    </footer>


    <script src="{{ asset('js/script.js') }}"></script>

</body>

</html>