
    @include('stevie.layouts.app-back-head')
    <!-- Main Wrapper -->
    <div class="main-wrapper">

        <!-- Header -->
        <div class="header">

            <!-- Logo -->
            <div class="header-left">
                <a href="{{route('client-home')}}" class="logo">

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
                        <span>Client</span>
                    </a>
                    <div class="dropdown-menu">
                        <a class="dropdown-item" href="{{route('client-profile')}}">Mon profile</a>
                        <a class="dropdown-item" href="{{route('home')}}">Retour aux achats</a>
                        <a class="dropdown-item" href="{{route('logout')}}">Déconnexion</a>
                    </div>
                </li>
            </ul>
            <!-- /Header Menu -->

            <!-- Mobile Menu -->
            <div class="dropdown mobile-user-menu">
                <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
                <div class="dropdown-menu dropdown-menu-right">
                    <a class="dropdown-item" href="{{route('client-profile')}}">Mon profil</a>
                    <a class="dropdown-item" href="{{route('home')}}">Retour aux achats</a>
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
                                <a href="{{route('client-profile')}}" class="avatar"><img src="{{asset('assets-back/img/profiles/avatar-19.jpg')}}" alt=""></a>
                                <a href="{{route('client-profile')}}" style="color: #fff;">{{$client->name}}</a>
                            </h2>

                        </li>
                        <!-- Dashboard  -->
                        <li class="menu">
                            <a href="{{route('client-home')}}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                        </li>
                        <!-- End/Dashboard -->

                        <!-- Begin Favoris -->
                        <li class="menu-title">
                            <span> </span>
                        </li>
                        <li class="menu">
                            <a href="{{route('client-mes-produits-preferes')}}" ><i class="la la-heart-o"></i> <span>Mes produits préférés</span></a>
                        </li>
                        <!-- End Favoris -->

                        <!-- Begin Mes commandes -->
                        <li class="menu-title">
                            <span> </span>
                        </li>
                        <li class="menu">
                            <a href="{{route('client-mes-commandes')}}" ><i class="la la-list"></i> <span>Mon historique d'achat</span></a>
                        </li>
                        <!-- End Mes commandes -->

                        <!-- Begin Paramètres du compte -->
                        <li class="menu-title">
                            <span> </span>
                        </li>
                        <li class="menu">
                            <a href="{{route('client-profile')}}" ><i class="la la-cog"></i> <span>Paramètres du compte</span></a>
                        </li>
                        <!-- End Paramètres du compte -->

                    </ul>
                </div>
            </div>
        </div>
        <!-- /Sidebar -->

        @yield('content')

    </div>
    <!-- /Main Wrapper -->
    @include('stevie.layouts.app-back-foot')
