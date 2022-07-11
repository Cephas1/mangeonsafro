<!-- Page Preloder -->
<div id="preloder">
    <div class="loader"></div>
</div>

<!-- Humberger Begin -->
<div class="humberger__menu__overlay"></div>
<div class="humberger__menu__wrapper">
    <div class="humberger__menu__logo">
        <a href="/"><img src="{{ asset('assets-front/img/logo.png') }}" style="height: 50px; width:50px " alt=""></a>
    </div>
    <div class="humberger__menu__cart">
        <ul>
            <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
            <li><a href="{{ route('shoping-cart') }}"><i class="fa fa-shopping-bag"></i> <span>3</span></a></li>
        </ul>
        <!-- <div class="header__cart__price"> <span>$150.00</span></div> -->
    </div>
    <div class="humberger__menu__widget">
        <div class="header__top__right__language">
            <img src="{{ asset('/assets-front/img/fr.jpeg') }}" alt="">
            <div>Français</div>
            <span class="arrow_carrot-down"></span>
            <ul>
                <li><a href="#">Français</a></li>
                <li><a href="#">English</a></li>
            </ul>
        </div>
        <div class="header__top__right__auth">
            <a href="login"><i class="fa fa-user"></i> Login</a>
            <form method="POST" action="{{ route('logout') }}">
                @csrf

                <x-responsive-nav-link :href="route('logout')" onclick="event.preventDefault();
                                                            this.closest('form').submit();">
                    {{ __('Deconnexion') }}
                </x-responsive-nav-link>
            </form>
        </div>
    </div>
    <nav class="humberger__menu__nav mobile-menu">
        <ul>
            <li class="{{ (request()->routeIs('home')) ? 'active' : '' }}"><a href="{{ route('home') }}">Accueil</a></li>
            <li><a href="shop">Commerce</a>
                <ul class="header__menu__dropdown">
                    <li><a class="{{ (request()->routeIs('shop-grid')) ? 'active' : '' }}" href="{{ route('shop-grid') }}">Commerces</a></li>
                    <li><a class="{{ (request()->routeIs('shop-details')) ? 'active' : '' }}" href="{{ route('shop-details') }}">Détails Commerce</a></li>
                    <li><a class="{{ (request()->routeIs('shoping-cart')) ? 'active' : '' }}" href="{{ route('shoping-cart') }}">Panier</a></li>
                    <li><a class="{{ (request()->routeIs('checkout')) ? 'active' : '' }}" href="{{ route('checkout') }}">Check Out</a></li>
                </ul>
            </li>
            <li><a class="{{ (request()->routeIs('product')) ? 'active' : '' }}"
                    href="{{ route('product') }}">Produits</a>
                {{-- <ul class="header__menu__dropdown">
                    <li><a class="{{ (request()->routeIs('product')) ? 'active' : '' }}" href="{{ route('product') }}">Produits</a></li>
                    <li><a class="{{ (request()->routeIs('product-details')) ? 'active' : '' }}" href="{{ route('product-details') }}">Détails produit</a></li>
                </ul> --}}
            </li>
            <li><a href="blog">Blog</a>
                <ul class="header__menu__dropdown">
                    <li><a class="{{ (request()->routeIs('blog-details')) ? 'active' : '' }}" href="{{ route('blog-details') }}">Article</a></li>
                </ul>
            </li>
            <li><a class="{{ (request()->routeIs('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
        </ul>
    </nav>
    <div id="mobile-menu-wrap"></div>
    <div class="header__top__right__social">
        <a href="#"><i class="fa fa-facebook"></i></a>
        <a href="#"><i class="fa fa-instagram"></i></a>
        <a href="#"><i class="fa fa-twitter"></i></a>
        <a href="#"><i class="fa fa-linkedin"></i></a>
        <a href="#"><i class="fa fa-pinterest-p"></i></a>
    </div>
    <div class="humberger__menu__contact">
        <ul>
            <li><i class="fa fa-envelope"></i></li>
            <li>L’Afrique et les Caraïbes en mille et une saveurs !!!</li>
        </ul>
    </div>
</div>
<!-- Humberger End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="header__top">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__left">
                        <ul>
                            <li><i class="fa fa-envelope"></i> contact@mangeonsafro.com</li>
                            <li>L’Afrique et les Caraïbes en mille et une saveurs !!!</li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 col-md-6">
                    <div class="header__top__right">
                        <div class="header__top__right__social">
                            @auth
                                @hasrole('super-admin')
                                    <a href="{{ route('dashboard') }}"><i class="fa fa-tachometer"></i> Dashboard </a>
                                @endhasrole
                            @endauth
                            <a href="#"><i class="fa fa-facebook"></i></a>
                            <a href="#"><i class="fa fa-instagram"></i></a>
                            <a href="#"><i class="fa fa-twitter"></i></a>
                            <a href="#"><i class="fa fa-linkedin"></i></a>
                            <!-- <a href="#"><i class="fa fa-pinterest-p"></i></a> -->
                        </div>
                        <div class="header__top__right__language">
                            <img src="{{ asset('/assets-front/img/fr.jpeg') }}" alt="">
                            <div>Français</div>
                            <span class="arrow_carrot-down"></span>
                            <ul>
                                <li><a href="#">Français</a></li>
                                <li><a href="#">English</a></li>
                            </ul>
                        </div>
                        <div class="header__top__right__auth">
                            @auth
                                <form method="POST" action="{{ route('logout') }}">
                                    @csrf
                                    <button type="submit" class="btn btn-danger fa fa-sign-out">
                                        Deconnexion
                                    </button>
                                </form>
                            @else
                                <a href="{{ route('login') }}"><i class="fa fa-user"></i> Login</a>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
                <div class="header__logo">
                    <a href="/"><img src="{{ asset('/assets-front/img/logo.png') }}"
                    style="height: 90px; width:90px "
                    alt=""></a>
                </div>
            </div>
            <div class="col-lg-6">
                <nav class="header__menu">
                    <ul>
                        <li class="{{ (request()->routeIs('home')) ? 'active' : '' }}"><a href="{{ route('home') }}">Accueil</a></li>
                        <li><a href="shop">Commerce</a>
                            <ul class="header__menu__dropdown">
                                <li><a class="{{ (request()->routeIs('shop-grid')) ? 'active' : '' }}" href="{{ route('shop-grid') }}">Commerces</a></li>
                                <li><a class="{{ (request()->routeIs('shop-details')) ? 'active' : '' }}" href="{{ route('shop-details') }}">Détails Commerce</a></li>
                                <li><a class="{{ (request()->routeIs('shoping-cart')) ? 'active' : '' }}" href="{{ route('shoping-cart') }}">Panier</a></li>
                                <li><a class="{{ (request()->routeIs('checkout')) ? 'active' : '' }}" href="{{ route('checkout') }}">Check Out</a></li>
                            </ul>
                        </li>
                        <li><a class="{{ (request()->routeIs('product')) ? 'active' : '' }}"
                                href="{{ route('product') }}">Produits</a>
                            {{-- <ul class="header__menu__dropdown">
                                <li><a class="{{ (request()->routeIs('product')) ? 'active' : '' }}" href="{{ route('product') }}">Produits</a></li>
                                <li><a class="{{ (request()->routeIs('product-details')) ? 'active' : '' }}" href="{{ route('product-details') }}">Détails produit</a></li>
                            </ul> --}}
                        </li>
                        <li><a class="{{ request()->routeIs('quoi-de-9') ? 'active' : '' }}"
                                href="{{ route('quoi-de-9') }}">Quoi de 9?</a>
                            {{-- <ul class="header__menu__dropdown">
                                <li><a class="{{ (request()->routeIs('blog-details')) ? 'active' : '' }}" href="{{ route('blog-details') }}">Article</a></li>
                            </ul> --}}
                        </li>
                        <li><a class="{{ (request()->routeIs('contact')) ? 'active' : '' }}" href="{{ route('contact') }}">Contact</a></li>
                    </ul>
                </nav>
            </div>
            <div class="col-lg-3">
                <div class="header__cart">
                    <ul>
                        <li><a href="#"><i class="fa fa-heart"></i> <span>1</span></a></li>
                        <li><a href="{{ route('shoping-cart') }}"><i class="fa fa-shopping-bag"></i>
                                <span>3</span></a></li>
                        <li>
                            @auth
                                <a href="{{ route('frontend.profile.profile') }}">
                                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                        aria-hidden="true" role="img" class="iconify iconify--ph" width="24" height="24"
                                        preserveAspectRatio="xMidYMid meet" viewBox="0 0 256 256" style="color: #000">
                                        <path fill="currentColor"
                                            d="M230 128a102 102 0 1 0-170.8 75.3l1.2 1a101.8 101.8 0 0 0 135.2 0l1.2-1A101.8 101.8 0 0 0 230 128Zm-192 0a90 90 0 1 1 155.5 61.6a77.7 77.7 0 0 0-40-31.3a46 46 0 1 0-51 0a77.7 77.7 0 0 0-40 31.3A89.5 89.5 0 0 1 38 128Zm56-8a34 34 0 1 1 34 34a34.1 34.1 0 0 1-34-34Zm-22.6 78a66.1 66.1 0 0 1 113.2 0a90.1 90.1 0 0 1-113.2 0Z">
                                        </path>
                                    </svg>
                                    {{-- <span>3</span> --}}
                                </a>
                            @endauth
                        </li>
                    </ul>
                    <!-- <div class="header__cart__price">item: <span>$150.00</span></div> -->
                </div>
            </div>
        </div>
        <div class="humberger__open">
            <i class="fa fa-bars"></i>
        </div>
    </div>
</header>
<!-- Header Section End -->
