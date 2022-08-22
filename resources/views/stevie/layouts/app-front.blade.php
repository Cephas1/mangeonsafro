@include('stevie.layouts.app-front-head')
@if (!Route::is('comming-soon'))
    @include('stevie.layouts.header-front')
    @if (Route::is('home'))
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


@include('stevie.layouts.app-front-foot')
