@extends('stevie.layouts.app-back-admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Gestion des utilisateurs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Liste des utilisateurs</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_user"><i class="fa fa-plus"></i> Ajouter un utilisateur</a>
                    </div>
                </div>
            </div>


            <!-- /Page Header -->
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-4">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Nom</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option>Type d'utilisateur</option>
                            <option>Admin</option>
                            <option>Client</option>
                            <option>Vendeur</option>
                        </select>
                        <label class="focus-label">Statut</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#" class="btn btn-success btn-block"> Recherche... </a>
                </div>
            </div>
            <!-- Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Types d'utilisateur</th>
                                    <th>Téléphones</th>
                                    <th>Adresse</th>
                                    <th>Statut</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-19.jpg" alt=""></a>
                                            <a href="profile.html">Admin-01</a>
                                        </h2>
                                    </td>
                                    <td>Admin</td>
                                    <td>+33 6 95 88 19 19</td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td><span class="badge bg-inverse-success">Actif</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#lock_user"><i class="fa fa-lock m-r-5"></i>Bloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unlock_user"><i class="fa fa-unlock m-r-5"></i>Débloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i>Supprimer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-19.jpg" alt=""></a>
                                            <a href="profile.html">Client-01</a>
                                        </h2>
                                    </td>
                                    <td>Client</td>
                                    <td>+33 6 95 88 19 19</td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td><span class="badge bg-inverse-success">Actif</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#lock_user"><i class="fa fa-lock m-r-5"></i>Bloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unlock_user"><i class="fa fa-unlock m-r-5"></i>Débloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i>Supprimer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-19.jpg" alt=""></a>
                                            <a href="profile.html">Vendeur-01</a>
                                        </h2>
                                    </td>
                                    <td>Vendeur</td>
                                    <td>+33 6 95 88 19 19</td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td><span class="badge bg-inverse-success">Actif</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#lock_user"><i class="fa fa-lock m-r-5"></i>Bloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unlock_user"><i class="fa fa-unlock m-r-5"></i>Débloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i>Supprimer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-19.jpg" alt=""></a>
                                            <a href="profile.html">Client-02</a>
                                        </h2>
                                    </td>
                                    <td>Client</td>
                                    <td>+33 6 95 88 19 19</td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td><span class="badge bg-inverse-success">Actif</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#lock_user"><i class="fa fa-lock m-r-5"></i>Bloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unlock_user"><i class="fa fa-unlock m-r-5"></i>Débloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i>Supprimer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-19.jpg" alt=""></a>
                                            <a href="profile.html">Vendeur-02</a>
                                        </h2>
                                    </td>
                                    <td>Vendeur</td>
                                    <td>+33 6 95 88 19 19</td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td><span class="badge bg-inverse-danger">Bloquer</span></td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#lock_user"><i class="fa fa-lock m-r-5"></i>Bloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unlock_user"><i class="fa fa-unlock m-r-5"></i>Débloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i>Supprimer</a>
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


        <!-- Add User Modal -->
        <div id="add_user" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter un utilisateur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Nom <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Prénom <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Téléphone </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Mot de passe <span class="text-danger">*</span></label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirme mot de passe <span class="text-danger">*</span></label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="select">
                                            <option>Admin</option>
                                            <option>Client</option>
                                            <option>Vendeur</option>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add User Modal -->


        <!-- Lock user Modal -->
        <div class="modal custom-modal fade" id="lock_user" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Bloquer l'utilisateur</h3>
                            <p>Voulez-vous bloquer cet utilisateur? </p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Bloquer</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Annuler</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Lock user Modal -->

        <!-- Unlock user Modal -->
        <div class="modal custom-modal fade" id="unlock_user" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Débloquer l'utilisateur</h3>
                            <p>Voulez-vous débloquer cet utilisateur? </p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Débloquer</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Annuler</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Unlock shop Modal -->

        <!-- Delete Leave Modal -->
        <div class="modal custom-modal fade" id="delete_user" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Supprimer le produit</h3>
                            <p>Voulez-vous vraiment supprimer ce produit?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Supprimer</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Annuler</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete Leave Modal -->

    </div>
    <!-- /Page Wrapper -->
@endsection
