@include('stevie.layouts.app-back-head')
<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="{{route('vendeur-home')}}" class="logo">

                <img src="{{asset('assets-back/img/logo-mangeonsafro.png')}}" width="60" height="60" alt="">

            </a>
        </div>
        <!-- /Logo -->

        <a id="toggle_btn" href="javascript:void(0);">
            <span class="bar-icon">
                <span></span>
                <span></span>
                <span></span>
            </span>
        </a>

        <!-- Header Title -->
        <div class="page-title-box">
            <h3>MangeonsAfro</h3>
        </div>
        <!-- /Header Title -->

        <a id="mobile_btn" class="mobile_btn" href="#sidebar"><i class="fa fa-bars"></i></a>

        <!-- Header Menu -->
        <ul class="nav user-menu">

            <!-- Search -->
            <li class="nav-item">
                <div class="top-nav-search">
                    <a href="javascript:void(0);" class="responsive-search">
                        <i class="fa fa-search"></i>
                   </a>

                </div>
            </li>
            <!-- /Search -->





            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><i class="fa fa-user"></i>
                    <!-- <span class="status online"></span></span> -->
                    <span>Vendeur</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('vendeur-profile')}}">Mon profile</a>
                    <a class="dropdown-item" href="{{route('logout')}}">Déconnexion</a>
                </div>
            </li>
        </ul>
        <!-- /Header Menu -->

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{route('vendeur-profile')}}">Mon profil</a>
                <a class="dropdown-item" href="{{route('logout')}}">Déconnexion</a>
            </div>
        </div>
        <!-- /Mobile Menu -->

    </div>
    <!-- /Header -->

    <!-- Sidebar -->
    <div class="sidebar" id="sidebar">
        <div class="sidebar-inner slimscroll">
            <div id="sidebar-menu" class="sidebar-menu">
                <ul>
                    <li class="menu-title">

                        <h2 class="table-avatar">
                            <a href="{{route('vendeur-profile')}}" class="avatar"><img src="{{asset('assets-back/img/profiles/avatar-19.jpg')}}" alt=""></a>
                            <a href="{{route('vendeur-profile')}}" style="color: #fff;">{{$vendeur->name}}</a>
                        </h2>

                    </li>
                    <!-- Dashboard  -->
                    <li class="menu">
                        <a href="{{route('vendeur-home')}}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                    </li>
                    <!-- End/Dashboard -->

                    <!-- Begin Ma boutique -->
                    <li class="menu-title">
                        <span></span>
                    </li>
                    <li class="submenu">
                        <a href="#" ><i class="las la-store-alt"></i> <span>Ma boutique</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="" href="{{route('vendeur-mes-produits')}}">Mes produits</a></li>
                            <li><a class="" href="{{route('vendeur-categories-produits')}}">Catégories produits</a></li>
                            <li><a class="" href="{{route('vendeur-mes-informations')}}">Mes informations</a></li>
                        </ul>
                    </li>
                    <!-- End Ma boutique -->

                    <!-- Begin Mes commandes -->
                    <li class="menu">
                        <li class="menu-title">
                        <span></span>
                    </li>
                    <li>
                        <a href="{{route('vendeur-mes-commandes')}}" ><i class="la la-list"></i> <span>Mes commandes</span></a>
                    </li>
                    <!-- End Mes commandes -->

                    <!-- Begin Mon portefeuille -->
                    <li class="menu-title">
                        <span></span>
                    </li>
                    <li class="menu">
                        <a href="{{route('vendeur-mon-portefeuille')}}" ><i class="la la-money"></i> <span>Mon portefeuille</span></a>
                    </li>
                    <!-- End Mon portefeuille -->

                    <!-- Begin Mes commentaires -->
                    <li class="menu-title">
                        <span></span>
                    </li>
                    <li class="menu">
                        <a href="{{route('vendeur-mes-commentaires')}}" ><i class="la la-comment"></i> <span>Mes commentaires</span></a>
                    </li>
                    <!-- End Mes commentaires -->

                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    @yield('content')

</div>
<!-- /Main Wrapper -->
@include('stevie.layouts.app-back-foot')
