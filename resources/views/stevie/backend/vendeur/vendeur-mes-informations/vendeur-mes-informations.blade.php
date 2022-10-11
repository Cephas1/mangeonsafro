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
                                                <h3 class="user-name m-t-0 mb-0">{{$shop->name}}</h3>
                                                <h6 class="text-muted">Statut de la boutique</h6>
                                                <!-- <small class="text-muted">Web Designer</small> -->
                                                <div class="staff-id">ID Boutique: FT-{{$shop->id}}</div>
                                                <div class="small doj text-muted">Date de création: {{$shop->created_at}}</div>
                                                <div class="staff-id">Genre: @foreach ($cat as $catg )
                                                    @if ($catg->id == $shop->categorie_shop_id)
                                                        {{$catg->name}}
                                                    @endif
                                                @endforeach</div>
                                                <div class="staff-id">Responsable commerce: <a href="{{route('vendeur-profile')}}">{{$vendeur->first_name}} {{$vendeur->name}}</a></div>
                                            </div>
                                        </div>
                                        <div class="col-md-8">
                                            <ul class="personal-info">
                                                <li>
                                                    <div class="title">Téléphone:</div>
                                                    @if ($shop->phone=="")
                                                        ...
                                                    @else
                                                    <div class="text"><a href="">{{$shop->phone}}</a></div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    @if ($shop->email=="")
                                                        ...
                                                    @else
                                                    <div class="text"><a href="">{{$shop->email}}</a></div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Adresse:</div>
                                                    @if ($shop->address=="")
                                                        ...
                                                    @else
                                                    <div class="text">{{$shop->address}}</div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Ville:</div>
                                                    @if ($shop->city=="")
                                                        ...
                                                    @else
                                                    <div class="text"><a href="">{{$shop->city}}</a></div>
                                                    @endif
                                                </li>
                                                <li>
                                                    <div class="title">Pays:</div>
                                                    @if ($shop->country=="")
                                                        ...
                                                    @else
                                                    <div class="text"><a href="">{{$shop->country}}</a></div>
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
                                                    @if ($shop->description=="")
                                                        ...
                                                    @else
                                                    <div class="text">{{$shop->description}}</div>
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
                                                    <input type="text" class="form-control" name="name" value="{{$shop->name}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Genre</label>
                                                    <select class="form-control" name="categorie">
                                                        @foreach ($cat as $catg )
                                                            @if ($catg->id == $shop->id)
                                                                <option value="{{$catg->id}}" selected>{{$catg->name}}</option>
                                                            @else
                                                                <option value="{{$catg->id}}">{{$catg->name}}</option>
                                                            @endif
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Description</label>
                                                    <input type="text" class="form-control" name="description" value="{{$shop->description}}">
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
                                                    <input type="text" class="form-control" name="phone" value="{{$shop->phone}}">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adresse email</label>
                                                    <input type="text" class="form-control" name="email" value="{{$shop->email}}">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" name="address" value="{{$shop->address}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ville</label>
                                            <input type="text" class="form-control" name="city" value="{{$shop->city}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pays</label>
                                            <input type="text" class="form-control" name="country" value="{{$shop->country}}">
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

        </div>
        <!-- /Page Content -->


    </div>
    <!-- /Page Wrapper -->
@endsection
