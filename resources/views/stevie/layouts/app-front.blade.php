<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ogani Template">
    <meta name="keywords" content="Ogani, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>MangeonsAfro</title>


    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

    <!-- Css Styles -->
    <link rel="stylesheet" href="{{asset('assets-front/css/bootstrap.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets-front/css/font-awesome.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets-front/css/elegant-icons.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets-front/css/nice-select.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets-front/css/jquery-ui.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets-front/css/owl.carousel.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets-front/css/slicknav.min.css')}}" type="text/css">
    <link rel="stylesheet" href="{{asset('assets-front/css/style.css')}}" type="text/css">
    <link rel="shortcut icon" type="image/x-icon" href="assets-front/img/logo.png">
    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin=""/>



</head>

<body>
    @if (!Route::is('stevie-comming-soon'))
        @include('stevie.layouts.header-front')
        @if (Route::is('stevie-index'))
            @include('stevie.layouts.category-search-font-index')
        @else
            @include('stevie.layouts.category-search-font')
        @endif
        @yield('content')
        @include('stevie.layouts.footer-front')
    @else
        <div id="preloder">
            <div class="loader"></div>
        </div>
        @yield('content')
    @endif


    <!-- Js Plugins -->
    <script src="{{asset('assets-front/js/jquery-3.3.1.min.js')}}"></script>
    <script src="{{asset('assets-front/js/bootstrap.min.js')}}"></script>
    <script src="{{asset('assets-front/js/jquery.nice-select.min.js')}}"></script>
    <script src="{{asset('assets-front/js/jquery-ui.min.js')}}"></script>
    <script src="{{asset('assets-front/js/jquery.slicknav.js')}}"></script>
    <script src="{{asset('assets-front/js/mixitup.min.js')}}"></script>
    <script src="{{asset('assets-front/js/owl.carousel.min.js')}}"></script>
    <script src="{{asset('assets-front/js/main.js')}}"></script>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
    integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
    crossorigin=""></script>
    @if (Route::is('stevie-commerce-map'))
        @include('stevie.layouts.map')
    @endif

</body>
</html>
