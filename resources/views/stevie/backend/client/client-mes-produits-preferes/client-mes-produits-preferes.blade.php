@extends('stevie.layouts.app-back-client')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Favoris</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('client-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Mes produits préférés</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <form action="">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group form-focus">
                            <input type="search" name="search" class="form-control floating" value="{{$search}}">
                            <label class="focus-label">Produit</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-success btn-block">Recherche</button>
                        {{-- <a href="#" class="btn btn-success btn-block">Recherche </a> --}}
                    </div>
                </div>
            </form>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Produit</th>
                                    <th>Prix produit</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($favoris as $fav)
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="javascript:void(0);" class="avatar"><img src="{{asset('assets-back/img/products/image-'.random_int(1,7).'.png')}}" alt=""></a>
                                            <a href="javascript:void(0);">{{$fav->name}}</a>
                                        </h2>
                                    </td>
                                    <td>{{number_format($fav->price,2)}} €</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_produit"><i class="fa fa-plus m-r-5"></i> Ajouter au panier</a> --}}
                                                <a class="dropdown-item" href="{{route('client-delete-favoris',$fav->id)}}"  id="deleteProduit"><i class="fa fa-trash-o m-r-5"></i> Retirer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-14.png" alt=""></a>
                                            <a href="profile.html">produit-09<span>Catégorie-001</span></a>
                                        </h2>
                                    </td>
                                    <td>2.00 €</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_produit"><i class="fa fa-plus m-r-5"></i> Ajouter au panier</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_produit"><i class="fa fa-trash-o m-r-5"></i> Retirer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-14.png" alt=""></a>
                                            <a href="profile.html">produit-01<span>Catégorie-001</span></a>
                                        </h2>
                                    </td>
                                    <td>2.00 €</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_produit"><i class="fa fa-plus m-r-5"></i> Ajouter au panier</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_produit"><i class="fa fa-trash-o m-r-5"></i> Retirer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-13.png" alt=""></a>
                                            <a href="profile.html">produit-02<span>Catégorie-001</span></a>
                                        </h2>
                                    </td>
                                    <td>2.00 €</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#add_produit"><i class="fa fa-plus m-r-5"></i> Ajouter au panier</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_produit"><i class="fa fa-trash-o m-r-5"></i> Retirer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr> --}}
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Delete fav produit Modal -->
        <div class="modal custom-modal fade" id="deleteProduitModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Retirer produit</h3>
                            <p>Voulez-vous vraiment retirer ce produit de favoris? </p>
                        </div>
                        <div class="modal-btn delete-action" id="deleteFav">
                            {{-- <form action="" class="row">
                                <div class="col-6" >
                                    <button class="btn btn-primary continue-btn" style="width: 212px">Oui</button>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Non</a>
                                </div>
                            </form> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete fav produit Modal -->

        <!-- Add produit Panier Modal -->
        <div class="modal custom-modal fade" id="add_produit" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Commander produit</h3>
                            <p>Voulez-vous ajouter ce produit a votre panier? </p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Oui</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Non</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add fav produit Modal -->

    </div>
    <!-- /Page Wrapper -->
@endsection
