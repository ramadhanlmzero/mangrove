<html lang="id">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="initial-scale=1,user-scalable=no,maximum-scale=1,width=device-width">
        <meta name="mobile-web-app-capable" content="yes">
        <meta name="apple-mobile-web-app-capable" content="yes">
        <meta name="description" content="Sistem Informasi Geografis Mangrove Kabupaten Gresik">
        <meta name="author" content="Debyana Nur Savitri">
        <title>Sistem Informasi Geografis Mangrove Kabupaten Gresik</title>

        <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/mdb.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/font-awesome.css') }}">
        <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
        @yield('css')
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-dark success-color">
            <a class="navbar-brand font-weight-bold" href="{{ route('index') }}">Mangrove Kabupaten Gresik</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav">
                    <li class="nav-item {{ setActive(['/']) }}">
                        <a class="nav-link" href="{{ route('index') }}">
                            <i class="fa fa-home"></i>&nbsp;&nbsp;Beranda
                        </a>
                    </li>
                    <li class="nav-item {{ setActive(['map']) }}">
                        <a class="nav-link" href="{{ route('map') }}">
                            <i class="fa fa-map"></i>&nbsp;&nbsp;Peta
                        </a>
                    </li>
                    <li class="nav-item {{ setActive(['graphic']) }}">
                        <a class="nav-link" href="{{ route('graphic') }}">
                            <i class="fa fa-signal"></i>&nbsp;&nbsp;Grafik
                        </a>
                    </li>
                </ul>
            </div>
        </nav>
        @yield('content')
    </body>

    <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
    <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets/js/mdb.min.js') }}"></script>
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    @yield('js')
</html>