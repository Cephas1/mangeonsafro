@extends('stevie.layouts.app-back-vendeur')
@section('content')
<div class="page-wrapper">

    <!-- Page Content -->
    <div class="content container-fluid">

        <!-- Page Header -->
        <div class="page-header">
            <div class="row">
                <div class="col-sm-12">
                    <h3 class="page-title">Profil</h3>
                    <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home')}}">Dashboard</a></li>
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
                                    <a href="#"><img alt="" src="{{asset('assets-back/img/profiles/avatar-0'.random_int(1,7).'.jpg')}}"></a>
                                </div>
                            </div>
                            <div class="profile-basic">
                                <div class="row">
                                    <div class="col-md-5">
                                        <div class="profile-info-left">
                                            <h3 class="user-name m-t-0 mb-0">
                                                {{$vendeur->name}}
                                            </h3>
                                            <h6 class="text-muted">Statut de l'utilisateur</h6>
                                            <!-- <small class="text-muted">Web Designer</small> -->
                                            <div class="staff-id">ID utilisateur : FT-{{$vendeur->id}}</div>
                                            <div class="small doj text-muted">Date de création: {{$vendeur->created_at}}</div>
                                        </div>
                                    </div>
                                    <div class="col-md-7">
                                        <ul class="personal-info">
                                            <li>
                                                <div class="title">Téléphone:</div>
                                                @if ($vendeur->phone=="")
                                                ...
                                                @else
                                                <div class="text"><a href="">{{$vendeur->phone}}</a></div>
                                                @endif
                                            </li>
                                            <li>
                                                <div class="title">Email:</div>
                                                @if ($vendeur->email=="")
                                                ...
                                                @else
                                                <div class="text"><a href="">{{$vendeur->email}}</a></div>
                                                @endif
                                            </li>
                                            <li>
                                                <div class="title">Birthday:</div>
                                                @if ($vendeur->birthday=="")
                                                ...
                                                @else
                                                <div class="text">{{$vendeur->birthday}}</div>
                                                @endif
                                            </li>
                                            <li>
                                                <div class="title">Adresse:</div>
                                                @if ($vendeur->city=="")
                                                ...
                                                @else
                                                <div class="text">{{$vendeur->city}}</div>
                                                @endif
                                            </li>
                                            <li>
                                                <div class="title">Genre:</div>
                                                @if ($vendeur->gender=="")
                                                ...
                                                @else
                                                <div class="text">{{$vendeur->gender}}</div>
                                                @endif
                                            </li>
                                            <li>
                                                <div class="title">Ville:</div>
                                                @if ($vendeur->city=="")
                                                ...
                                                @else
                                                <div class="text">{{$vendeur->city}}</div>
                                                @endif
                                            </li>
                                            <li>
                                                <div class="title">Pays:</div>
                                                @if ($vendeur->country=="")
                                                ...
                                                @else
                                                <div class="text">{{$vendeur->country}}</div>
                                                @endif
                                            </li>
                                            <li>
                                                {{-- <div class="staff-msg"><a class="btn btn-custom" href="#" data-target="#edit_password" data-toggle="modal">Modifier le mot de passe</a></div> --}}
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

    @include('stevie.backend.vendeur.vendeur-profile.vendeur-edit-info-profile')

    @include('stevie.backend.vendeur.vendeur-profile.vendeur-edit-password-profile')


</div>
@endsection
