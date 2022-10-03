<!-- Page Wrapper -->
<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Profil</h3>
                    <ul class="breadcrumb">
                        @if (Route::is('admin-profile'))
                            <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Dashboard</a></li>
                        @endif
                        @if (Route::is('client-profile'))
                            <li class="breadcrumb-item"><a href="{{route('client-home',['id'=>$client->id])}}">Dashboard</a></li>
                        @endif
                        @if (Route::is('vendeur-profile'))
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home')}}">Dashboard</a></li>
                        @endif
                        <li class="breadcrumb-item active">Profil</li>
                    </ul>
                </div>
            </div>
        </div>
        <!-- /Page Header -->

        <!-- Information personnel -->
        <div class="card mb-3" style="max-width: none; max-height: none;">
            <h2 class="text-center mt-2">Information personnel</h2>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-12">
                        <div class="profile-view">
                            <div class="profile-img-wrap">
                                <div class="profile-img">
                                    <img class="inline-block" src="{{asset('assets-back/img/profiles/avatar-02.jpg')}}" alt="user">
                                    {{-- @if (Route::is('client-profile'))
                                        <a href="#"><img alt="" src="{{ @if($client->image->url) asset($client->image->url) @endif }}"></a>
                                    @elseif (Route::is('admin-profile'))
                                        <a href="#"><img alt="" src="{{ @if($admin->image->url) asset($admin->image->url) @endif }}"></a>
                                    @elseif (Route::is('vendeur-profile'))
                                        <a href="#"><img alt="" src="{{ @if($vendeur->image->url) asset($vendeur->image->url) @endif }}"></a>
                                    @endif --}}
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">
                                                @if (Route::is('client-profile'))
                                                    {{$client->name}}
                                                @elseif (Route::is('admin-profile'))
                                                    {{$admin->name}}
                                                @elseif (Route::is('vendeur-profile'))
                                                    {{$vendeur->name}}
                                                @endif
                                            </h3>
                                            <h5 class="">
                                                    <!--<small class="text-muted">-->
                                                    @if (Route::is('client-profile'))
                                                        Client
                                                    @elseif (Route::is('admin-profile'))
                                                        Admin
                                                    @elseif (Route::is('vendeur-profile'))
                                                        Vendeur
                                                    @endif
                                                    <!--</small>-->
                                            </h5>
                                            <div class="staff-id">Utilisateur : {{$admin->name}}</div>
                                            <div class="small doj text-muted">Date de création: {{$admin->created_at}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Téléphone:</div>
                                                <div class="text"><a href="">
                                                    @if (Route::is('client-profile'))
                                                        {{$client->phone}}
                                                    @elseif (Route::is('admin-profile'))
                                                        {{$admin->phone}}
                                                    @elseif (Route::is('vendeur-profile'))
                                                        {{$client->phone}}
                                                    @endif
                                                    </a></div>
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                <div class="text"><a href="">
                                                    @if (Route::is('client-profile'))
                                                        {{$client->email}}
                                                    @elseif (Route::is('admin-profile'))
                                                        {{$admin->email}}
                                                    @elseif (Route::is('vendeur-profile'))
                                                        {{$client->email}}
                                                    @endif
                                                </a></div>
                                            </li>
                                            <li>
                                                <div class="title">Birthday:</div>
                                                <div class="text">
                                                    @if (Route::is('client-profile'))
                                                        {{$client->birthday}}
                                                    @elseif (Route::is('admin-profile'))
                                                        {{$admin->birthday}}
                                                    @elseif (Route::is('vendeur-profile'))
                                                        {{$client->birthday}}
                                                    @endif
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">Adresse:</div>
                                                <div class="text">
                                                    @if (Route::is('client-profile'))
                                                        {{$client->address}}
                                                    @elseif (Route::is('admin-profile'))
                                                        {{$admin->address}}
                                                    @elseif (Route::is('vendeur-profile'))
                                                        {{$client->address}}
                                                    @endif
                                                </div>
                                            </li>
                                            <li>
                                                <div class="title">Genre:</div>
                                                <div class="text">
                                                    @if (Route::is('client-profile'))
                                                        {{$client->gender}}
                                                    @elseif (Route::is('admin-profile'))
                                                        {{$admin->gender}}
                                                    @elseif (Route::is('vendeur-profile'))
                                                        {{$client->gender}}
                                                    @endif
                                                </div>
                                            </li>
                                            <li>
                                                {{--<div class="staff-msg"><a class="btn btn-custom" href="#" data-target="#edit_password" data-toggle="modal">Modifier le mot de passe</a></div>--}}
                                                <div class="staff-msg"><a class="btn btn-custom" href={{ route('password.reset', @csrf_token()) }}>Modifier le mot de passe</a></div>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="pro-edit"><a data-target="#profile_info" data-toggle="modal" class="edit-icon" href="#"><i class="fa fa-pencil"></i></a></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Information personnel -->


    </div>
    <!-- /Page Content -->

    @include('stevie.backend.profile.edit-info-profile')

    @include('stevie.backend.profile.edit-password-profile')


</div>
<!-- /Page Wrapper -->
