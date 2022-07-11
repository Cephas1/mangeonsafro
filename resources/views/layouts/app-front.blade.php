<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="description" content="mangeonsafro">
        <meta name="keywords" content="mangeons, afro, produit, html">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>MangeonsAfro</title>

        <!-- Google Font -->
        <link href="https://fonts.googleapis.com/css2?family=Cairo:wght@200;300;400;600;900&display=swap" rel="stylesheet">

        <!-- Css Styles -->
        <link rel="stylesheet" href="{{ asset('assets-front/css/bootstrap.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets-front/css/font-awesome.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets-front/css/elegant-icons.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets-front/css/nice-select.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets-front/css/jquery-ui.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets-front/css/owl.carousel.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets-front/css/slicknav.min.css') }}" type="text/css">
        <link rel="stylesheet" href="{{ asset('assets-front/css/style.css') }}" type="text/css">
        <link rel="shortcut icon" type="image/x-icon" href="{{ asset('assets-front/img/logo.png') }}">
    </head>

    <body>
        @include('layouts.header-front')
        @include('layouts.category-search-index')
        @yield('content')
        @include('layouts.footer-front')

        <!-- Js Plugins -->
        <script src="{{ asset('/assets-front/js/jquery-3.3.1.min.js') }}"></script>
        <script src="{{ asset('/assets-front/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('/assets-front/js/jquery.nice-select.min.js') }}"></script>
        <script src="{{ asset('/assets-front/js/jquery-ui.min.js') }}"></script>
        <script src="{{ asset('/assets-front/js/jquery.slicknav.js') }}"></script>
        <script src="{{ asset('/assets-front/js/mixitup.min.js') }}"></script>
        <script src="{{ asset('/assets-front/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('/assets-front/js/main.js') }}"></script>
    </body>
</html>
