@extends('stevie.layouts.app-back-admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="content container-fluid">
            <!-- Page Header -->
            <div class="page-header">
                <div class="row">
                    <div class="col-sm-12">
                        <h3 class="page-title">Bienvenue!</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item active">Dashboard</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <!-- counter  -->
            <div class="row">
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-laptop-house"></i></span>
                            <div class="dash-widget-info">
                                <h3>112</h3>
                                <span>Faits maison</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-store"></i></span>
                            <div class="dash-widget-info">
                                <h3>44</h3>
                                <span>Restaurants</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-bread-slice"></i></i></span>
                            <div class="dash-widget-info">
                                <h3>37</h3>
                                <span>Traiteurs</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-6 col-lg-6 col-xl-3">
                    <div class="card dash-widget">
                        <div class="card-body">
                            <span class="dash-widget-icon"><i class="fas fa-shopping-bag"></i></span>
                            <div class="dash-widget-info">
                                <h3>218</h3>
                                <span>Epiceries</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end counter -->

            <!-- Classement boutique -->
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Commerce</th>
                                    <th>Nombres de Commandes</th>
                                    <th>Chiffre d'affaires</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-7.png" alt=""></a>
                                            <a href="profile.html">Restaurant-01<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td class="text-center">75004</td>
                                    <td>10000 €</td>
                                    <td>
                                    <span class="badge bg-inverse-success">5.0</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-8.png" alt=""></a>
                                            <a href="profile.html">Restaurant-02<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td class="text-center">45200</td>
                                    <td>6500 €</td>
                                    <td>
                                    <span class="badge bg-inverse-warning">3.5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-9.png" alt=""></a>
                                            <a href="profile.html">Restaurant-03<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td class="text-center">5200</td>
                                    <td>2500 €</td>
                                    <td>
                                    <span class="badge bg-inverse-danger">2.0</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--End Classement boutique -->

            <!-- statistics section -->
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Graphes</h3>
                                    <div id="bar-charts"></div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6 text-center">
                            <div class="card">
                                <div class="card-body">
                                    <h3 class="card-title">Vue de ...</h3>
                                    <div id="line-charts"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end statistics section -->
        </div>
        <!-- /Page Content -->

    </div>
    <!-- /Page Wrapper -->
@endsection
