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
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home',$vendeur->id)}}">Dashboard</a></li>
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
                                        <div class="col-md-5">
                                            <div class="profile-info-left">
                                                <h3 class="user-name m-t-0 mb-0">{{$shop->shop_name}}</h3>
                                                <h6 class="text-muted">Statut de la boutique</h6>
                                                <!-- <small class="text-muted">Web Designer</small> -->
                                                <div class="staff-id">ID Boutique: FT-{{$shop->id_shop}}</div>
                                                <div class="small doj text-muted">Date de création: {{$shop->date_creation}}</div>
                                                <div class="staff-id">Genre: {{$shop->categorie}}</div>
                                            </div>
                                        </div>
                                        <div class="col-md-7 row">
                                            <div class="col-12 d-flex">
                                                <div class="title">Téléphone:</div>
                                                <div class="text m-l-5"><a href="">{{$shop->shop_phone}}</a></div>
                                            </div>
                                            <div class="col-12 d-flex">
                                                <div class="title">Email:</div>
                                                <div class="text m-l-5"><a href="">{{$shop->shop_email}}</a></div>
                                            </div>
                                            {{-- <div class="col-12 d-flex">
                                                <div class="title">Adresse:</div>
                                                <div class="text m-l-5">{{$shop->shop_addres}}</div>
                                            </div> --}}
                                            {{-- <div class="col-12 d-flex">
                                                <div class="title">Adresse:</div>
                                                <div class="text m-l-5">{{$shop->shop_ville}}</div>
                                            </div> --}}
                                            {{-- <div class="col-12 d-flex">
                                                <div class="title">Adresse:</div>
                                                <div class="text m-l-5">{{$shop->shop_pays}}</div>
                                            </div> --}}
                                            <div class="col-12 d-flex">
                                                <div class="title">Adresse:</div>
                                                <div class="text m-l-5">{{$shop->web_site}}</div>
                                            </div>
                                            <div class="col-12 d-flex">
                                                <div class="title">Responsable commerce:</div>
                                                <div class="text m-l-5">
                                                    <a href="profile.html">
                                                        {{$shop->user_first_name}} {{$shop->user_name}}
                                                    </a>
                                                </div>
                                            </div>
                                            {{-- <ul class="personal-info">
                                                <li>
                                                    <div class="title">Téléphone:</div>
                                                    <div class="text"><a href="">{{$shop->shop_phone}}</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Email:</div>
                                                    <div class="text"><a href="">{{$shop->shop_email}}</a></div>
                                                </li>
                                                <li>
                                                    <div class="title">Adresse:</div>
                                                    <div class="text">{{$shop->web_site}}</div>
                                                </li>
                                                <li>
                                                <li>
                                                    <div class="title">Responsable commerce:</div>
                                                    <div class="text">
                                                       <a href="profile.html">
                                                            {{$shop->user_first_name}} {{$shop->user_name}}
                                                        </a>
                                                    </div>
                                                </li>
                                            </ul> --}}
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
                            <form>
                                <div class="row">
                                    <div class="col-md-12">
                                        <div class="profile-img-wrap edit-img">
                                            <img class="inline-block" src="assets-back/img/profiles/shop-1.jpg" alt="shop">
                                            <div class="fileupload btn">
                                                <span class="btn-text">edit</span>
                                                <input class="upload" type="file">
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Nom de la boutique</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Genre</label>
                                                    <select class="form-control">
                                                        <option value="restaurant selected">Restaurants</option>
                                                        <option value="boucherie">Traiteurs</option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Téléphone</label>
                                                    <input type="text" class="form-control" >
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Adresse email</label>
                                                    <input type="text" class="form-control">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Address</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>ville</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Pays</label>
                                            <input type="text" class="form-control" >
                                        </div>
                                    </div>
                                </div>
                                <div class="submit-section">
                                    <button class="btn btn-primary submit-btn">Modifier</button>
                                </div>
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
