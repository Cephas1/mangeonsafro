@extends('stevie.layouts.app-back-vendeur')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Information sur ma boutique</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Ma boutique</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            @foreach ($shop as $shop )
            <div class="card mb-0" style="max-width: none; max-height: none;">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="profile-view">
                                <div class="profile-img-wrap">
                                    <div class="profile-img">
                                        <a href="#"><img alt="" src="{{asset('assets-back/img/profiles/shop-1.jpg')}}"></a>
                                    </div>
                                </div>
                                <div class="profile-basic">
                                    <div class="row">
                                        <div class="col-md-4">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{$shop->shop_name}}</h3>
                                                <h6 class="text-muted">Statut de la boutique</h6>
                                                <!-- <small class="text-muted">Web Designer</small> -->
                                                <div class="staff-id">ID Boutique: FT-{{$shop->id_shop}}</div>
                                                <div class="small doj text-muted">Date de création: {{$shop->date_creation}}</div>
                                                <div class="staff-id">Genre: {{$shop->categorie}}</div>
                                                <div class="staff-id">Responsable commerce: <a href="{{route('vendeur-profile')}}">{{$shop->user_first_name}} {{$shop->user_name}}</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Téléphone:</div>
                                                    @if ($shop->shop_phone=="")
                                                        ...
                                                    @else
                                                    <div class="text"><a href="">{{$shop->shop_phone}}</a></div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    @if ($shop->shop_email=="")
                                                        ...
                                                    @else
                                                    <div class="text"><a href="">{{$shop->shop_email}}</a></div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Adresse:</div>
                                                    @if ($shop->shop_address=="")
                                                        ...
                                                    @else
                                                    <div class="text">{{$shop->shop_address}}</div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Ville:</div>
                                                    @if ($shop->shop_city=="")
                                                        ...
                                                    @else
                                                    <div class="text"><a href="">{{$shop->shop_city}}</a></div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Pays:</div>
                                                    @if ($shop->shop_country=="")
                                                        ...
                                                    @else
                                                    <div class="text"><a href="">{{$shop->shop_country}}</a></div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Site web:</div>
                                                    @if ($shop->web_site=="")
                                                        ...
                                                    @else
                                                    <div class="text">{{$shop->web_site}}</div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Description:</div>
                                                    @if ($shop->shop_description=="")
                                                        ...
                                                    @else
                                                    <div class="text">{{$shop->shop_description}}</div>
                                                    @endif
                                                </li>
                                                {{-- <li>
                                                    <div class="title">Responsable commerce:</div>
                                                    <div class="text">
                                                       <a href="profile.html">
                                                            {{$shop->user_first_name}} {{$shop->user_name}}
                                                        </a>
                                                    </div>
                                                </li> --}}
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
            <!-- Profile Modal -->
            <div id="profile_info" class="modal custom-modal fade" role="dialog">
                <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title">Boutique information</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <form action="{{route('vendeur-edit-shop')}}" method="POST">
                                {{-- <input type="text" name="id_shop" value="{{$shop->id_shop}}" class="d-none"> --}}
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profile-img-wrap edit-img">
                                            <img class="inline-block" src="{{asset('assets-back/img/profiles/shop-1.jpg')}}" alt="shop">
                                            <div class="fileupload btn">
                                                <span class="btn-text">edit</span>
                                                <input class="upload" type="file" name="image">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nom de la boutique</label>
                                                    <input type="text" class="form-control" name="name" value="{{$shop->shop_name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Genre</label>
                                                    <select class="form-control" name="categorie">
                                                        @foreach ($cat as $cat )
                                                            @if ($cat->id == $shop->id_cat)
                                                                <option value="{{$cat->id}}" selected>{{$cat->name}}</option>
                                                            @else
                                                                <option value="{{$cat->id}}">{{$cat->name}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name="description" value="{{$shop->shop_description}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adresse site web</label>
                                                    <input type="text" class="form-control" name="web_site" value="{{$shop->web_site}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Téléphone</label>
                                                    <input type="text" class="form-control" name="phone" value="{{$shop->shop_phone}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adresse email</label>
                                                    <input type="text" class="form-control" name="email" value="{{$shop->shop_email}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" value="{{$shop->shop_address}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ville</label>
                                            <input type="text" class="form-control" name="city" value="{{$shop->shop_city}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pays</label>
                                            <input type="text" class="form-control" name="country" value="{{$shop->shop_country}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Modifier</button>
                                </div>
                                @csrf
                                @method('PUT')
                            </form>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Profile Modal -->
            @endforeach
        </div>
        <!-- /Page Content -->


    </div>
    <!-- /Page Wrapper -->
@endsection
