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
                        <h3 class="page-title">Mon portefeuille</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Liste des ventes</li>
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
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-wallet"></i></span>
                            <div class="dash-widget-info">
                                <h3>60 €</h3>
                                <span>Total vendu</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-6">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-money-check"></i></span>
                            <div class="dash-widget-info">
                                <h3>44 €</h3>
                                <span>Total à percevoir</span>
                            </div>
                        </div>
                    </div>
                </div>
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
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>CM-22-001</td>
                                    <td>10.00 €</td>
                                    <td>15/01/2022</td>
                                </tr>
                                <tr>
                                    <td>CM-22-001</td>
                                    <td>10.00 €</td>
                                    <td>20/01/2021</td>
                                </tr>
                                <tr>
                                    <td>CM-22-001</td>
                                    <td>10.00 €</td>
                                    <td>20/01/2021</td>
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
