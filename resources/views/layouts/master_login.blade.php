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

        <link rel="stylesheet" href="{{ asset('assets_admin/css/bootstrap.min.css') }}">
        <link rel="stylesheet" href="{{ asset('assets_admin/css/atlantis.min.css') }}">
        @yield('css')
    </head>
    <body class="login">
        @yield('content')
    </body>

    <script src="{{ asset('assets_admin/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/atlantis.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugin/webfont/webfont.min.js') }}"></script>
    @yield('js')
</html>