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
    @if (Route::is('commerce-map'))
        @include('stevie.layouts.map')
    @endif

</body>
</html>
