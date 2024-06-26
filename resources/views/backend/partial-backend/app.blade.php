
<!DOCTYPE html>
<html>

<head>
    <!-- -------------- Meta and Title -------------- -->
    <meta charset="utf-8">
    <title>Admin Zainu Pentol</title>
    <meta name="keywords" content="HTML5, Bootstrap 3, Admin Template, UI Theme"/>
    <meta name="description" content="Alliance - A Responsive HTML5 Admin UI Framework">
    <meta name="author" content="ThemeREX">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- -------------- Fonts -------------- -->
    <link rel='stylesheet' type='text/css' href='http://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700'>
    <link href='https://fonts.googleapis.com/css?family=Lato:400,300,300italic,400italic,700,700italic' rel='stylesheet'
          type='text/css'>

    <!-- -------------- Icomoon -------------- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/fonts/icomoon/icomoon.css')}}">

    <!-- -------------- FullCalendar -------------- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/js/plugins/fullcalendar/fullcalendar.min.css')}}">
    <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/js/plugins/magnific/magnific-popup.css')}}">

    <!-- -------------- Plugins -------------- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/js/plugins/c3charts/c3.min.css')}}">

    <!-- -------------- CSS - theme -------------- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/skin/default_skin/css/theme.css')}}">

    <!-- -------------- CSS - allcp forms -------------- -->
    <link rel="stylesheet" type="text/css" href="{{asset('assets_backend/allcp/forms/css/forms.css')}}">

    <!-- -------------- Favicon -------------- -->
    <link rel="shortcut icon" href="{{asset('assets_backend/img/favicon.ico')}}">

    <!-- -------------- IE8 HTML5 support  -------------- -->
    <!--[if lt IE 9]>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7.2/html5shiv.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

</head>

<body class="dashboard-page">


<!-- -------------- Body Wrap  -------------- -->
<div id="main">

    <!-- -------------- Header  -------------- -->
    <header class="navbar navbar-fixed-top bg-dark">
        <div class="navbar-logo-wrapper">
            <a class="navbar-logo-text" href="{{ route('index') }}">
                <b>Admin</i></b>
            </a>
            <span id="sidebar_left_toggle" class="ad ad-lines"></span>
        </div>
        <ul class="nav navbar-nav navbar-right">
            <li class="hidden-xs">
                <a class="navbar-fullscreen toggle-active" href="#">
                    <span class="glyphicon glyphicon-fullscreen"></span>
                </a>
            </li>
        </ul>

    </header>
    <!-- -------------- /Header  -------------- -->

    <!-- -------------- Sidebar  -------------- -->
    <aside id="sidebar_left" class="nano nano-light affix">

        <!-- -------------- Sidebar Left Wrapper  -------------- -->
        <div class="sidebar-left-content nano-content">


            <!-- -------------- Sidebar Menu  -------------- -->
            <ul class="nav sidebar-menu">
                <li class="sidebar-label pt30">Menu</li>

                <li class="active">
                    <a class="accordion-toggle menu-open" href="#">
                        <span class="fa fa-dashboard"></span>
                        <span class="sidebar-title">Dashboard</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li class="active">
                            <a href="{{ route('index') }}">
                                <span class="fa fa-file-text-o"></span> Dashboard </a>
                        </li>
                    </ul>
                </li>
                
                <li class="sidebar-label pt25">Tools</li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-share-square-o"></span>
                        <span class="sidebar-title">Produk</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ route('pentol') }}">
                                <span class="glyphicon glyphicon-tags"></span> Pentol </a>
                        </li>
                        <li>
                            <a href="{{ route('minuman') }}">
                                <span class="glyphicon glyphicon-tags"></span> Minuman </a>
                        </li>
                        <li>
                            <a href="{{ route('snack') }}">
                                <span class="fa fa-money"></span> Snack </a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-desktop"></span>
                        <span class="sidebar-title">Transaksi</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ route('diskon') }}">
                                <span class="glyphicon glyphicon-modal-window"></span> Diskon Setting </a>
                        </li>
                        <li>
                            <a href="{{ route('pesanan-masuk') }}">
                                <span class="glyphicon glyphicon-modal-window"></span> Pesanan Masuk </a>
                        </li>
                        <li>
                            <a href="{{ route('pesanan-selesai') }}">
                                <span class="glyphicon glyphicon-equalizer"></span> Pesanan Selesai </a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-check-square-o"></span>
                        <span class="sidebar-title">Laporan</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li>
                            <a href="{{ route('laporan-stok') }}">
                                <span class="glyphicon glyphicon-modal-window"></span> Laporan Stock </a>
                        </li>
                        <li>
                            <a href="{{ route('laporan-harian') }}">
                                <span class="glyphicon glyphicon-modal-window"></span> Laporan Transaksi Harian </a>
                        </li>
                        <li>
                            <a href="{{ route('laporan-bulanan') }}">
                                <span class="glyphicon glyphicon-equalizer"></span> Laporan ransaksi Bulanan </a>
                        </li>
                    </ul>
                </li>

                <li class="sidebar-label pt30">Elements</li>
                <li>
                    <a class="accordion-toggle" href="#">
                        <span class="fa fa-cogs"></span>
                        <span class="sidebar-title">Pengaturan</span>
                        <span class="caret"></span>
                    </a>
                    <ul class="nav sub-nav">
                        <li class="active">
                            <a href="{{ route('slide') }}">
                                <span class="fa fa-file-text-o"></span> Slogan Bisnis</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('slide') }}">
                                <span class="fa fa-file-text-o"></span> Slide Show</a>
                        </li>
                        <li class="active">
                            <a href="{{ route('user') }}">
                                <span class="fa fa-file-text-o"></span> Pengatuan User </a>
                        </li>
                    </ul>


                </li>

                <li class="sidebar-label pt30 "> <a class="fa fa-sign-out" style="font-size:18px;color:red" href="{{ route('home') }}">  Sign Out</a></li>
            </ul>

            <!-- -------------- /Sidebar Menu  -------------- -->

            <!-- -------------- Sidebar Hide Button -------------- -->
            <div class="sidebar-toggler">
                <a href="#">
                    <span class="fa fa-arrow-circle-o-left"></span>
                </a>
            </div>
            <!-- -------------- /Sidebar Hide Button -------------- -->

        </div>
        <!-- -------------- /Sidebar Left Wrapper  -------------- -->

    </aside>
    <!-- -------------- /Sidebar -------------- -->
            {{-- <i class="fa fa-sign-out" style="font-size:18px;color:red"> --}}
    <!-- -------------- Main Wrapper -------------- -->
    <section id="content_wrapper">

@yield('content')
        <!-- -------------- Page Footer -------------- -->
        <footer id="content-footer" class="affix">
            <div class="row">
                <div class="col-md-6">
                    <span class="footer-legal">© 2024 All rights reserved. <a href="{{ route('home') }}">Zainu Pentol</a> </span>
                </div>
                <div class="col-md-6 text-right">
                    <span class="footer-meta"></span>
                    <a href="#content" class="footer-return-top">
                        <span class="fa fa-angle-up"></span>
                    </a>
                </div>
            </div>
        </footer>
        <!-- -------------- /Page Footer -------------- -->

    </section>
    <!-- -------------- /Main Wrapper -------------- -->

</div>
<!-- -------------- /Body Wrap  -------------- -->

<!-- -------------- Scripts -------------- -->

<!-- -------------- jQuery -------------- -->
<script src="{{asset('assets_backend/js/jquery/jquery-1.11.3.min.js')}}"></script>
<script src="{{asset('assets_backend/js/jquery/jquery_ui/jquery-ui.min.js')}}"></script>

<!-- -------------- HighCharts Plugin -------------- -->
<script src="{{asset('assets_backend/js/plugins/highcharts/highcharts.js')}}"></script>
<script src="{{asset('assets_backend/js/plugins/c3charts/d3.min.js')}}"></script>
<script src="{{asset('assets_backend/js/plugins/c3charts/c3.min.js')}}"></script>

<!-- -------------- Simple Circles Plugin -------------- -->
<script src="{{asset('assets_backend/js/plugins/circles/circles.js')}}"></script>

<!-- -------------- Maps JSs -------------- -->
<script src="{{asset('assets_backend/js/plugins/jvectormap/jquery.jvectormap.min.js')}}"></script>
<script src="{{asset('assets_backend/js/plugins/jvectormap/assets/jquery-jvectormap-us-lcc-en.js')}}"></script>

<!-- -------------- FullCalendar Plugin -------------- -->
<script src="{{asset('assets_backend/js/plugins/fullcalendar/lib/moment.min.js')}}"></script>
<script src="{{asset('assets_backend/js/plugins/fullcalendar/fullcalendar.min.js')}}"></script>

<!-- -------------- Date/Month - Pickers -------------- -->
<script src="{{asset('assets_backend/allcp/forms/js/jquery-ui-monthpicker.min.js')}}"></script>
<script src="{{asset('assets_backend/allcp/forms/js/jquery-ui-datepicker.min.js')}}"></script>

<!-- -------------- Magnific Popup Plugin -------------- -->
<script src="{{asset('assets_backend/js/plugins/magnific/jquery.magnific-popup.js')}}"></script>

<!-- -------------- Theme Scripts -------------- -->
<script src="{{asset('assets_backend/js/utility/utility.js')}}"></script>
<script src="{{asset('assets_backend/js/demo/demo.js')}}"></script>
<script src="{{asset('assets_backend/js/main.js')}}"></script>

<!-- -------------- Widget JS -------------- -->
<script src="{{asset('assets_backend/js/demo/widgets.js')}}"></script>
<script src="{{asset('assets_backend/js/demo/widgets_sidebar.js')}}"></script>
<script src="{{asset('assets_backend/js/pages/dashboard1.js')}}"></script>
<!-- -------------- /Scripts -------------- -->

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<script>
    //message with sweetalert
    @if(session('success'))
        Swal.fire({
            icon: "success",
            title: "BERHASIL",
            text: "{{ session('success') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @elseif(session('error'))
        Swal.fire({
            icon: "error",
            title: "GAGAL!",
            text: "{{ session('error') }}",
            showConfirmButton: false,
            timer: 2000
        });
    @endif

</script>


</body>

</html>
