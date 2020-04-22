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
    <body>
        <div class="wrapper">
            <div class="main-header">
                <div class="logo-header" data-background-color="blue">
                    <a href="{{ route('dashboard') }}" class="logo white-text">
                        Dashboard Admin
                    </a>
                    <button class="navbar-toggler sidenav-toggler ml-auto" type="button" data-toggle="collapse" data-target="collapse" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon">
                                <i class="icon-menu"></i>
                            </span>
                    </button>
                    <button class="topbar-toggler more"><i class="icon-options-vertical"></i></button>
                    <div class="nav-toggle">
                        <button class="btn btn-toggle toggle-sidebar">
                            <i class="icon-menu"></i>
                        </button>
                    </div>
                </div>
                <nav class="navbar navbar-header navbar-expand-lg" data-background-color="blue2">
                    <div class="container-fluid">
                        <ul class="navbar-nav topbar-nav ml-md-auto align-items-center">
                            <li class="nav-item dropdown hidden-caret">
                                <a class="dropdown-toggle profile-pic" data-toggle="dropdown" href="#" aria-expanded="false">
                                    <div class="row">
                                        <h5 class="text-white mb-0 mr-2">{{ Auth::user()->nama }}</h5>
                                        <i class="fa fa-sort-down text-white"></i>
                                    </div>
                                </a>
                                <ul class="dropdown-menu dropdown-user animated fadeIn">
                                    <div class="dropdown-user-scroll scrollbar-outer">
                                        <li>
                                            <div class="user-box">
                                                <div class="u-text">
                                                    <h4>{{ Auth::user()->nama }}</h4>
                                                    <p class="text-muted">{{ Auth::user()->email }}</p>
                                                    <a href="{{ route('dashboard') }}" class="btn btn-xs btn-secondary btn-sm">Dashboard</a>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('user.edit', Auth::user()->id) }}">Ubah Profil</a>
                                            <a class="dropdown-item" href="{{ route('user.reset', Auth::user()->id) }}">Ubah Password</a>
                                        </li>
                                        <li>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('map') }}">Kembali ke Peta</a>
                                            <div class="dropdown-divider"></div>
                                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form2').submit();">
                                                <form id="logout-form2" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                                Log Out                                                
                                            </a>
                                        </li>
                                    </div>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </nav>
            </div>
            <div class="sidebar sidebar-style-2">
                <div class="sidebar-wrapper scrollbar scrollbar-inner">
                    <div class="sidebar-content">
                        <div class="user">
                            <div class="info">
                                <a data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                                    <span>
                                        {{ Auth::user()->nama }}
                                        <span class="user-level">{{ Auth::user()->hak_akses }}</span>
                                        <span class="caret"></span>
                                    </span>
                                </a>
                                <div class="clearfix"></div>
                                <div class="collapse in" id="collapseExample">
                                    <ul class="nav">
                                        <li>
                                            <a href="{{ route('user.edit', Auth::user()->id) }}">
                                                <span class="link-collapse">Ubah Profil</span>
                                            </a>
                                            <a href="{{ route('user.reset', Auth::user()->id) }}">
                                                <span class="link-collapse">Ubah Password</span>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">
                                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                                    {{ csrf_field() }}
                                                </form>
                                                <span class="link-collapse">Logout</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <ul class="nav nav-primary">
                            <li class="nav-item {{ setActive(['admin']) }}">
                                <a href="{{ route('dashboard') }}">
                                    <i class="fas fa-home"></i>
                                    <p>Dashboard</p>
                                </a>
                            </li>
                            <li class="nav-section">
                                <span class="sidebar-mini-icon">
                                        <i class="fa fa-ellipsis-h"></i>
                                    </span>
                                <h4 class="text-section">Menu Admin</h4>
                            </li>
                            <li class="nav-item {{ setActive(['admin/mangrove*']) }}">
                                <a href="{{ route('mangrove.index') }}">
                                    <i class="fas fa-tree"></i>
                                    <p>Data Mangrove</p>
                                </a>
                            </li>
                            <li class="nav-item {{ setActive(['admin/sampel*']) }}">
                                <a href="{{ route('sampel.index') }}">
                                    <i class="fas fa-map-marker-alt"></i>
                                    <p>Data Sampel</p>
                                </a>
                            </li>
                            <li class="nav-item {{ setActive(['admin/kecamatan*']) }}">
                                <a href="{{ route('kecamatan.index') }}">
                                    <i class="fas fa-atlas"></i>
                                    <p>Data Kecamatan</p>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="main-panel">
                <div class="content">
                    @yield('content')
                </div>
                <footer class="footer">
                    <div class="container-fluid">
                        <nav class="pull-left">
                            <ul class="nav">
                                <li class="nav-item">
                                    Sistem Informasi Geografis Mangrove Kabupaten Gresik
                                </li>
                            </ul>
                        </nav>
                        <div class="copyright ml-auto">
                            2020, made with <i class="fa fa-heart heart text-danger"></i> by <a href="{{ route('index') }}">Debyana Nur Savitri</a>
                        </div>
                    </div>
                </footer>
            </div>
        </div>
    </body>

    <script src="{{ asset('assets_admin/js/core/jquery.3.2.1.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/core/bootstrap.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/core/popper.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugin/jquery-ui-1.12.1.custom/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugin/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugin/jquery-scrollbar/jquery.scrollbar.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/atlantis.min.js') }}"></script>
    <script src="{{ asset('assets_admin/js/plugin/webfont/webfont.min.js') }}"></script>
    <script type="text/javascript" src="{{asset('assets_admin/js/plugin/sweetalert/sweetalert.min.js')}}"></script>
    @include('sweet::alert')
    <script>
        var test = 
        WebFont.load({
			google: {"families":["Lato:300,400,700,900"]},
			custom: {"families":["Flaticon", "Font Awesome 5 Solid", "Font Awesome 5 Regular", "Font Awesome 5 Brands", "simple-line-icons"], urls: ["{{ asset('assets_admin/css/fonts.min.css') }}"]},
			active: function() {
				sessionStorage.fonts = true;
			}
		});
    </script>
    @yield('js')
</html>