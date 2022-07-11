@extends('layouts.app-back')

@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Rapport de commande</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Rapport de commande</li>
                        </ul>
                    </div>
                    <div class="dropdown col-auto float-right ml-auto ">
                        <button class="btn add-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-file"></i>Exporter
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">PDF</a>
                          <a class="dropdown-item" href="#">EXCEL</a>
                          <a class="dropdown-item" href="#">CSV</a>
                        </div>
                      </div>
                </div>


            </div>
            <!-- /Page Header -->
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Commande ID</th>
                                    <th>Date</th>
                                    <th>Client</th>
                                    <th>Nom produit</th>
                                    <th>Prix</th>
                                    <th>Quantité</th>
                                    <th>Total</th>
                                    <th>Catégorie produit</th>
                                    <th>Livreur</th>
                                    <th>Destination</th>
                                    <th class="text-center">Statut livraison</th>
                                    <th>Methode de paiement</th>

                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>#BM9708</td>
                                    <td>13/01/2022</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-02.jpg"></a>
                                            <a>	John Doe  <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>produit01</td>
                                    <td class="text-center">2,50 €</td>
                                    <td class="text-center">2</td>
                                    <td class="text-center">5,00 €</td>
                                    <td>Catégorie01</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-02.jpg"></a>
                                            <a>	John Doe  <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Lorem ipsum</td>
                                    <td class="text-success text-center">Delivered</td>
                                    <td>Mastercard</td>
                                </tr>

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
    </div>
    <!-- /Page Wrapper -->

@endsection
