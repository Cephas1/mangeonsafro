@php
use App\http\Controllers\stevie\headerController;
$nbr_fav= headerController::nbrFavoris();
$nbr_basket= headerController::nbrBaskets();
@endphp

    <!-- Page Preloder -->
    <div id="preloder">
        <div class="loader"></div>
    </div>
    <!-- Humberger Begin -->
    <div class="humberger__menu__overlay"></div>
    <div class="humberger__menu__wrapper">
        <div class="humberger__menu__logo">
            <a href="{{route('home')}}"><img src="{{asset('assets-front/img/logo.png')}}" style="height: 50px; width:50px " alt=""></a>
        </div>
        <div class="humberger__menu__cart">
            <ul>
                <li><a href="{{route('favoris')}}"><i class="fa fa-heart"></i> <span>{{$nbr_fav}}</span></a></li>
                <li><a href="{{route('shopping-cart')}}"><i class="fa fa-shopping-bag"></i> <span>{{$nbr_basket}}</span></a></li>
            </ul>
            <!-- <div class="header__cart__price"> <span>$150.00</span></div> -->
        </div>
        <div class="humberger__menu__widget">
            {{-- <div class="header__top__right__language">
                <img src="assets-front/img/fr.jpeg" alt="">
                <div>Français</div>
                <span class="arrow_carrot-down"></span>
                <ul>
                    <li><a href="#">Français</a></li>
                    <li><a href="#">Anglais</a></li>
                </ul>
            </div> --}}

            @auth
                <nav  class="humberger__menu__nav mobile-menu">
                    <ul>
                        <li><span><i class="fa fa-user"></i> Mon compte</span>
                            <ul class="header__menu__dropdown">
                                @if (Auth::user()->role_id == 3)

                                    <li><a href="{{route('client-home')}}"><i class="fa fa-tachometer"></i>Mon tableau de bord</a></li>

                                @elseif(Auth::user()->role_id == 1)

                                    <li><a href="{{route('Admin-home')}}"><i class="fa fa-tachometer"></i>Mon tableau de bord</a></li>

                                @elseif(Auth::user()->role_id == 2)

                                    <li><a href="{{route('Admin-home')}}"><i class="fa fa-tachometer"></i>Mon tableau de bord</a></li>

                                @elseif (Auth::user()->role_id == 6)

                                    <li><a href="{{route('vendeur-home')}}"><i class="fa fa-tachometer"></i>Mon tableau de bord</a></li>

                                @endif
                                <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
                            </ul>
                        </li>
                    </ul>
                </nav >
            @else
                <div class="header__top__right__auth">
                    <a href="{{route('login')}}"><i class="fa fa-sign-in"></i>Connexion</a>
                </div>
                <div class="header__top__right__auth">
                    <a href="{{route('register')}}"><i class="fa fa-user-plus"></i>S'inscrire</a>
                </div>
            @endauth

        </div>
        <nav class="humberger__menu__nav mobile-menu">
            <ul>
                <li class="active"><a href="{{route('home')}}">Accueil</a></li>
                <li><a href="{{route('commerce-list')}}">Commerces</a></li>
                <li><a href="{{route('shop-grid')}}">Produits</a></li>
                <li><a href="{{route('a-propos-de-nous')}}">A propos de nous</a></li>
                <li><a href="{{route('conctact')}}">Contact</a></li>
            </ul>
        </nav>
        <div id="mobile-menu-wrap"></div>
        <div class="header__top__right__social">
            <a href="#"><i class="fa fa-facebook"></i></a>
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
                                <a href="#"><i class="fa fa-facebook"></i></a>
                                <a href="#"><i class="fa fa-instagram"></i></a>
                                <a href="#"><i class="fa fa-twitter"></i></a>
                                <a href="#"><i class="fa fa-linkedin"></i></a>
                                <!-- <a href="#"><i class="fa fa-pinterest-p"></i></a> -->
                            </div>
                            {{-- <div class="header__top__right__language">
                                <img src="assets-front/img/fr.jpeg" alt="">
                                <div>Français</div>
                                <span class="arrow_carrot-down"></span>
                                <ul>
                                    <li><a href="#">French</a></li>
                                    <li><a href="#">English</a></li>
                                </ul>
                            </div> --}}
                            @auth
                                <div class="header__top__right__auth com-a">
                                    <div><span><i class="fa fa-user"></i>Mon compte</span>
                                        <ul class="header__menu__dropdown">
                                            @if (Auth::user()->role_id == 3)

                                                <li><a href="{{route('client-home')}}"><i class="fa fa-tachometer"></i>Mon tableau de bord</a></li>

                                            @elseif(Auth::user()->role_id == 1)

                                                <li><a href="{{route('Admin-home')}}"><i class="fa fa-tachometer"></i>Mon tableau de bord</a></li>

                                            @elseif(Auth::user()->role_id == 2)

                                                <li><a href="{{route('Admin-home')}}"><i class="fa fa-tachometer"></i>Mon tableau de bord</a></li>

                                            @elseif (Auth::user()->role_id == 6)

                                                <li><a href="{{route('vendeur-home')}}"><i class="fa fa-tachometer"></i>Mon tableau de bord</a></li>

                                            @endif
                                            <li><a href="{{route('logout')}}"><i class="fa fa-sign-out"></i> Déconnexion</a></li>
                                        </ul>
                                    </div>
                                </div>
                            @else
                                <div class="header__top__right__auth">
                                    <a href="{{route('login')}}"><i class="fa fa-sign-in"></i> Connexion</a>
                                </div>
                                <div class="header__top__right__auth">
                                    <a href="{{route('register')}}"><i class="fa fa-user-plus"></i> S'inscrire</a>
                                </div>
                            @endauth
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-3">
                    <div class="header__logo">
                        <a href="{{route('home')}}"><img src="{{asset('assets-front/img/logo.png')}}"  style="height: 90px; width:90px "alt=""></a>
                    </div>
                </div>
                <div class="col-lg-7">
                    <nav class="header__menu">
                        <ul>
                            <li @if (Route::is('home')) class="active" @endif ><a href="{{route('home')}}">Accueil</a></li>
                            <li @if (Route::is('commerce-list')) class="active" @endif ><a href="{{route('commerce-list')}}">Commerces</a></li>
                            <li @if (Route::is('shop-grid')) class="active" @endif ><a href="{{route('shop-grid')}}">Produits</a></li>
                            <li @if (Route::is('a-propos-de-nous')) class="active" @endif ><a href="{{route('a-propos-de-nous')}}">A propos de nous</a></li>
                            <li @if (Route::is('contact')) class="active" @endif ><a href="{{route('conctact')}}">Contact</a></li>
                        </ul>
                    </nav>
                </div>
                <div class="col-lg-2">
                    <div class="header__cart">
                        <ul>
                            <li><a href="{{route('favoris')}}"><i class="fa fa-heart"></i> <span>{{$nbr_fav}}</span></a></li>
                            <li><a href="{{route('shopping-cart')}}"><i class="fa fa-shopping-bag"></i> <span>{{$nbr_basket}}</span></a></li>
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
