@include('stevie.layouts.app-back-head')
<!-- Main Wrapper -->
<div class="main-wrapper">

    <!-- Header -->
    <div class="header">

        <!-- Logo -->
        <div class="header-left">
            <a href="{{route('admin-home')}}" class="logo">

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



            <!-- Notifications -->
            <li class="nav-item dropdown">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <i class="fa fa-bell-o"></i> <span class="badge badge-pill">3</span>
                </a>
                <div class="dropdown-menu notifications">
                    <div class="topnav-dropdown-header">
                        <span class="notification-title">Notifications</span>
                        <a href="javascript:void(0)" class="clear-noti"> Clear All </a>
                    </div>
                    <div class="noti-content">
                        <ul class="notification-list">
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets-back/img/profiles/avatar-02.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">John Doe</span> added new task <span class="noti-title">Patient appointment booking</span></p>
                                            <p class="noti-time"><span class="notification-time">4 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets-back/img/profiles/avatar-03.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Tarah Shropshire</span> changed the task name <span class="noti-title">Appointment booking with payment gateway</span></p>
                                            <p class="noti-time"><span class="notification-time">6 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets-back/img/profiles/avatar-06.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Misty Tison</span> added <span class="noti-title">Domenic Houston</span> and <span class="noti-title">Claire Mapes</span> to project <span class="noti-title">Doctor available module</span></p>
                                            <p class="noti-time"><span class="notification-time">8 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets-back/img/profiles/avatar-17.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Rolland Webber</span> completed task <span class="noti-title">Patient and Doctor video conferencing</span></p>
                                            <p class="noti-time"><span class="notification-time">12 mins ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="notification-message">
                                <a href="activities.html">
                                    <div class="media">
                                        <span class="avatar">
                                            <img alt="" src="assets-back/img/profiles/avatar-13.jpg">
                                        </span>
                                        <div class="media-body">
                                            <p class="noti-details"><span class="noti-title">Bernardo Galaviz</span> added new task <span class="noti-title">Private chat module</span></p>
                                            <p class="noti-time"><span class="notification-time">2 days ago</span></p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="topnav-dropdown-footer">
                        <a href="activities.html">View all Notifications</a>
                    </div>
                </div>
            </li>
            <!-- /Notifications -->

            <li class="nav-item dropdown has-arrow main-drop">
                <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                    <span class="user-img"><i class="fa fa-user"></i>
                    <!-- <span class="status online"></span></span> -->
                    <span>Admin</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="{{route('admin-profile')}}">Mon profile</a>
                    <a class="dropdown-item" href="#">Déconnexion</a>
                </div>
            </li>
        </ul>
        <!-- /Header Menu -->

        <!-- Mobile Menu -->
        <div class="dropdown mobile-user-menu">
            <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
            <div class="dropdown-menu dropdown-menu-right">
                <a class="dropdown-item" href="{{route('admin-profile')}}">Mon profil</a>
                <a class="dropdown-item" href="#">Déconnexion</a>
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
                            <a href="{{route('admin-profile')}}" class="avatar"><img src="{{asset('assets-back/img/profiles/avatar-19.jpg')}}" alt=""></a>
                            <a href="{{route('admin-profile')}}" style="color: #fff;">Admin-01</a>
                        </h2>

                    </li>
                    <!-- Dashboard  -->
                    <li class="menu">
                        <a href="{{route('admin-home')}}"><i class="la la-dashboard"></i> <span> Dashboard</span></a>
                    </li>
                    <!-- End Dashboard -->

                    <!-- gestion des shop -->
                    <li class="menu-title">
                        <span> </span>
                    </li>
                    <li class="submenu">
                        <a href="#" ><i class="las la-store-alt"></i> <span>Gestion de commerces</span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a href="{{route('admin-list-commerces')}}">Liste des commerces</a></li>
                            <li><a href="{{route('admin-categories-commerces')}}">Catégories commerces</a></li>

                        </ul>
                    </li>
                    <!-- end gestion des shop -->

                    <!-- product management -->
                    <li class="menu-title">
                        <span> </span>
                    </li>
                    <li class="menu">
                        <a href="{{route('admin-gestion-des-commandes')}}"><i class="la la-shopping-bag"></i> <span>Gestion des Commandes</span></a>
                    </li>
                    <!-- end products manager -->

                    <!-- Users manager -->
                    <li class="menu-title">
                        <span></span>
                    </li>
                    <li class="menu">
                        <a href="{{route('admin-evaluations')}}"><i class="la la-pencil-square-o"></i> <span>Evaluations </span></a>
                    </li>
                    <!-- End users manager -->

                    <!-- Users manager -->
                    <li class="menu-title">
                        <span></span>
                    </li>
                    <li class="submenu">
                        <a href="#"><i class="la la-users"></i> <span>Gestion des utilisateurs </span> <span class="menu-arrow"></span></a>
                        <ul style="display: none;">
                            <li><a class="" href="{{route('admin-all-users')}}">Tous les utilisateurs</a></li>
                            <li><a class="" href="{{route('admin-categories-users')}}">Catégories d'utilisateurs</a></li>
                        </ul>
                    </li>
                    <!-- End users manager -->
                </ul>
            </div>
        </div>
    </div>
    <!-- /Sidebar -->

    @yield('content')

</div>
<!-- /Main Wrapper -->
@include('stevie.layouts.app-back-foot')
