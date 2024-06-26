<!DOCTYPE HTML>
<html lang="en">

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="viewport"
        content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1, viewport-fit=cover" />
    <title>AppKit Mobile</title>
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/bootstrap.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ asset('assets/styles/style.css') }}">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset ('assets/fonts/css/fontawesome-all.min.css') }}">
    <link rel="manifest" href="_manifest.json" data-pwa-version="set_in_manifest_and_pwa_js">
    <link rel="apple-touch-icon" sizes="180x180" href="{{asset ('assets/app/icons/icon-192x192.png') }}">
</head>

<body class="theme-light">

    <div id="preloader">
        <div class="spinner-border color-highlight" role="status"></div>
    </div>

    <div id="page">

        <div class="header header-fixed header-logo-left header-auto-show ">
            <a href="index.html" class="header-title">Zainu Pentol</a>
        </div>

        <div id="footer-bar" class="footer-bar-6">
            <a href="{{ route('pesanan') }}"><i class="fas fa-cart-arrow-down"></i><span><strong>Keranjang Belanja</strong></span></a>
            <a href="{{ route('home') }}" class="circle-nav active-nav"><i class="fa fa-home"></i><span class="color-highlight">Home</span></a>
            <a href="{{ route('lacak') }}"><i class="fas fa-bullhorn"></i><span><strong>Status Pesanan</strong></span></a>
        </div>




        @yield('content')

    </div>
    <!-- Page content ends here-->



    <script type="text/javascript" src="{{ asset ('assets/scripts/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset ('assets/scripts/custom.js') }}"></script>
</body>