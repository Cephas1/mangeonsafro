@extends('stevie.layouts.app-back-admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Gestion des commmandes</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Liste des commandes</li>
                        </ul>
                    </div>
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
                                <h3>{{ $ordersCount }}</h3>
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
                                <h3>{{ $terminated }}</h3>
                                <span>Commandes validées</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-4">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-clock-o"></i></i></span>
                            <div class="dash-widget-info">
                                <h3>{{ $waitingOrders }}</h3>
                                <span>Commandes en attente</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end counter -->

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-4">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Nom du commerce</label>
                    </div>
                </div>
                <!--<div class="col-sm-6 col-md-4">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option>En cour de livraison</option>
                            <option>Aucune livraison</option>
                        </select>
                        <label class="focus-label">Statut livraison</label>
                    </div>
                </div>-->
                <div class="col-sm-6 col-md-4">
                    <a href="#" class="btn btn-success btn-block">Recherche </a>
                </div>
            </div>
            <!-- /Search Filter -->

            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Commerces</th>
                                    <th>Nombre de commandes</th>
                                    <th>Commandes traitées</th>
                                    <th>Commandes en attente</th>
                                    <!--<th>Statut de livraison</th>-->
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($data as $key => $value)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#" class="avatar" data-toggle="modal" data-target="#list_commande"><img src="assets-back/img/products/image-7.png" alt=""></a>
                                                <a href="#" data-toggle="modal" data-target="#list_commande">{{ $value['shop'] }}<span>{{ $value['shopNumber'] }}</span></a>
                                            </h2>
                                        </td>
                                        <td>{{ $value['ordersCount'] }}</td>
                                        <td>{{ $value['orders1'] }}</td>
                                        <td>{{ $value['orders0'] }}</td>
                                        <!--<td><span class="badge bg-inverse-warning">En cours de livraison</span></td>-->
                                    </tr>
                                @endforeach
                                <!--<tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar" data-toggle="modal" data-target="#list_commande"><img src="assets-back/img/products/image-8.png" alt=""></a>
                                            <a href="#" data-toggle="modal" data-target="#list_commande">Restaurant-02<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td>150</td>
                                    <td>150</td>
                                    <td>0</td>
                                    <td><span class="badge bg-inverse-success">Aucune livraison</span></td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#"  class="avatar" data-toggle="modal" data-target="#list_commande"><img src="assets-back/img/products/image-9.png" alt=""></a>
                                            <a href="#" data-toggle="modal" data-target="#list_commande">Restaurant-03<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td>250</td>
                                    <td>100</td>
                                    <td>150</td>
                                    <td><span class="badge bg-inverse-warning">En cours de livraison</span></td>
                                </tr>-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Liste commande par commerce Modal -->
        <div class="modal custom-modal fade" id="list_commande" role="dialog">
            <div class="modal-dialog modal-dialog-centered row" style="max-width: 960px;">
                <div class="col-lg-2"></div>
                <div class="modal-content col-lg-10">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Liste des commandes</h3>
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
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>CM-22-001</td>
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
                                                </tr>
                                                <tr>
                                                    <td>CM-22-001</td>
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
                                                </tr>
                                                <tr>
                                                    <td>CM-22-001</td>
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
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
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
        <!-- /Liste commande par commerce Modal -->

    </div>
    <!-- /Page Wrapper -->
@endsection
