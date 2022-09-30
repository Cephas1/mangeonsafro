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
                        <h3 class="page-title">Mes achats</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('client-home',['id'=>$client->id])}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">historique d'achats</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- counter  -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-shopping-cart"></i></span>
                            <div class="dash-widget-info">
                                <h3>{{$successOrder}}</h3>
                                <span>Commandes reçu</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-check-circle"></i></span>
                            <div class="dash-widget-info">
                                <h3>{{$waitingOrder}}</h3>
                                <span>En cours de livraison</span>
                            </div>
                        </div>
                    </div>
                </div>
                {{-- <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-ban"></i></i></span>
                            <div class="dash-widget-info">
                                <h3>68</h3>
                                <span>Commandes annuler</span>
                            </div>
                        </div>
                    </div>
                </div> --}}
            </div>
            <!-- end counter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>N° de commande</th>
                                    <th>Total</th>
                                    <th>Statut de livraison</th>
                                    <th>Date</th>
                                    {{-- <th class="text-right">Action</th> --}}
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($Orders as $listOrder )
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="javascript:void(0);" data-toggle="modal" id="listProduit" data-url="{{route('client-details-orders',$listOrder->code)}}" data-total="{{$listOrder->total}}">CM-{{$listOrder->code}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$listOrder->total}} €</td>
                                    <td>
                                        @if ($listOrder->order_state == '1')
                                            <span class="badge bg-inverse-success">Livrer</span>
                                        @endif
                                        @if ($listOrder->order_state == '0')
                                            <span class="badge bg-inverse-warning">En cours</span>
                                        @endif
                                    </td>
                                    <td>{{$listOrder->created_at}}</td>
                                    {{-- <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#annule_order"><i class="fa fa-trash-o m-r-5"></i>Annuler</a>
                                            </div>
                                        </div>
                                    </td> --}}
                                </tr>
                                @endforeach
                                {{-- <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" data-toggle="modal" data-target="#list_produit">CM-22-001</a>
                                        </h2>
                                    </td>
                                    <td>30.00 €</td>
                                    <td>
                                    <span class="badge bg-inverse-success">Livrer</span>
                                    </td>
                                    <td>15/01/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i>Annuler</a>
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

        <!-- Annuler commande Modal -->
        <div class="modal custom-modal fade" id="annule_order" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Annuler la commande</h3>
                            <p>Voulez-vous vraiment annuler cette commande? </p>
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
        <!-- /Annuler commande Modal -->

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
