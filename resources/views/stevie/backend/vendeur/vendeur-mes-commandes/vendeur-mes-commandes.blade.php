@extends('stevie.layouts.app-back-vendeur')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Mes commandes</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home',$vendeur->id)}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Liste des livraisons</li>
                        </ul>
                    </div>
                    <!-- <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i>Créer un utilisateur</a>
                    </div> -->
                </div>
            </div>
            <!-- /Page Header -->

            <!-- counter  -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-shopping-cart"></i></span>
                            <div class="dash-widget-info">
                                <h3>{{$NbrOrder}}</h3>
                                <span>Nombres de commandes</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-check-circle"></i></span>
                            <div class="dash-widget-info">
                                <h3>{{$validOrder}}</h3>
                                <span>Commandes valider</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-clock-o"></i></i></span>
                            <div class="dash-widget-info">
                                <h3>{{$waitOrder}}</h3>
                                <span>Commandes en attente</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end counter -->

            <!-- Search Filter -->
            <form action="">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group form-focus">
                            <input type="search" class="form-control floating" name="search">
                            <label class="focus-label">Num commande</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-success btn-block">Recherche</button>
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
                                    <th>N° de commande</th>
                                    <th>Client</th>
                                    <th>Destination</th>
                                    <th>Total</th>
                                    <th>Statut de livraison</th>
                                    <th>Date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Orders as $order )

                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="javascript:void(0);" data-toggle="modal" id="listProduit" data-url="{{route('vendeur-details-commande',$order->code)}}" data-total="{{$order->total}}">CM-{{$order->code}}</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="javascript:void(0);">{{$clients->find($order->user_id)->name}}<span>{{$clients->find($order->user_id)->phone}}</span></a>
                                        </h2>
                                    </td>
                                    <td class="text-center">{{$clients->find($order->user_id)->address}}</td>
                                    <td>{{$order->total}} €</td>
                                    <td>
                                        @if ($order->order_state == '1')
                                            <span class="badge bg-inverse-success">Livrer</span>
                                        @endif
                                        @if ($order->order_state == '0')
                                            <span class="badge bg-inverse-warning">En cours</span>
                                        @endif
                                    </td>
                                    <td>{{$order->created_at}}</td>
                                    @if ($order->order_state == '0')
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" id="livrer" data-url="{{route('show-modal-livred',$order->code)}}"><i class="fa fa-check-square-o m-r-5"></i> Livrer</a>
                                            </div>
                                        </div>
                                    </td>
                                    @else
                                    <td></td>
                                    @endif
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" data-toggle="modal" data-target="#list_produit">CM-22-001</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html">Client-01<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td>30.00 €</td>
                                    <td>
                                    <span class="badge bg-inverse-success">Livrer</span>
                                    </td>
                                    <td>15/01/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Annuler</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" data-toggle="modal" data-target="#list_produit">CM-22-001</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html">Client-02<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td>30.00 €</td>
                                    <td>
                                    <span class="badge bg-inverse-warning">En cours</span>
                                    </td>
                                    <td>
                                        20/01/2021
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Annuler</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" data-toggle="modal" data-target="#list_produit">CM-22-001</a>
                                        </h2>
                                    </td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html">Client-01<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td>30.00 €</td>
                                    <td>
                                    <span class="badge bg-inverse-danger">Annuler</span>
                                    </td>
                                    <td>
                                        20/01/2021
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i> Annuler</a>
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

        <!-- Order state livred Modal -->
        <div class="modal custom-modal fade" id="livrerModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Statut commande</h3>
                            <p>Commande livrer? </p>
                        </div>
                        @csrf
                        @method('PUT')
                        <div class="modal-btn delete-action">
                           <span id="changeState"></span>
                           <form action="" method="POST">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-6">
                                        <input type="text" name="livred" value="1" class="d-none">
                                        <button class="btn btn-primary continue-btn btn-block">Oui</button>
                                    </div>
                                    <div class="col-6">
                                        <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Non</a>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Order state livred Modal -->

        <!--Liste produit Modal -->
        <div class="modal custom-modal fade" id="listProduitModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered row" style="max-width: 960px;">
                <div class="col-lg-2"></div>
                <div class="modal-content col-lg-10">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Liste des produits commander</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive" id="showDetailsOrder">
                                        {{-- <table class="table table-striped custom-table" id="list-order">
                                            <thead>
                                                <tr>
                                                    <th>Produit</th>
                                                    <th>Prix produit</th>
                                                    <th>Quantité</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody id="showDetailsOrder">
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-14.png" alt=""></a>
                                                            <a href="profile.html">produit-09<span>Catégorie-001</span></a>
                                                        </h2>
                                                    </td>
                                                    <td> 100 €</td>
                                                    <td>5</td>
                                                    <td>500 €</td>
                                                </tr>
                                            </tbody>
                                        </table> --}}
                                    </div>
                                </div>
                            </div>
                            <p style="margin-top: 20px;" >Total: <span id="totalOrder"></span> €</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-12">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Fermer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Liste produit Modal -->
    </div>
    <!-- /Page Wrapper -->
@endsection
