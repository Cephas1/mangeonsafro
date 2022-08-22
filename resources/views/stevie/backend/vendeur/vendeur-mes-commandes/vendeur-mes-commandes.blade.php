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
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home')}}">Dashboard</a></li>
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
                                <h3>112</h3>
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
                                <h3>44</h3>
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
                                <h3>68</h3>
                                <span>Commandes en attente</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- end counter -->

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Nom client</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Produit</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option>Livrer</option>
                            <option>En cour de livraison</option>
                            <option>Annuler</option>
                        </select>
                        <label class="focus-label">Statut livraison</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="btn btn-success btn-block">Recherche </a>
                </div>
            </div>
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
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Delete User Modal -->
        <div class="modal custom-modal fade" id="delete_user" role="dialog">
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
        <!-- /Delete User Modal -->

        <!--Liste produit Modal -->
        <div class="modal custom-modal fade" id="list_produit" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="width: 700px;">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Liste des produits commander</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped custom-table datatable">
                                            <thead>
                                                <tr>
                                                    <th>Produit</th>
                                                    <th>Prix produit</th>
                                                    <th>Quantité</th>
                                                    <th>Total</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-14.png" alt=""></a>
                                                            <a href="profile.html">produit-09<span>Catégorie-001</span></a>
                                                        </h2>
                                                    </td>
                                                    <td>2.00 €</td>
                                                    <td>5</td>
                                                    <td>10.00 €</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-14.png" alt=""></a>
                                                            <a href="profile.html">produit-01<span>Catégorie-001</span></a>
                                                        </h2>
                                                    </td>
                                                    <td>2.00 €</td>
                                                    <td>5</td>
                                                    <td>10.00 €</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/products/image-13.png" alt=""></a>
                                                            <a href="profile.html">produit-02<span>Catégorie-001</span></a>
                                                        </h2>
                                                    </td>
                                                    <td>2.00 €</td>
                                                    <td>5</td>
                                                    <td>10.00 €</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <p style="margin-top: 20px;">Total: 30.00 €</p>
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
