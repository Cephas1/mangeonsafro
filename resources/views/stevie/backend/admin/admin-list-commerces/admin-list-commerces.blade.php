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
                        <h3 class="page-title">Gestion des commerces</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Liste des commerces</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="content container-fluid">
                @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @elseif (session('error'))
                    <h6 class="alert alert-danger">{{ session('error') }}</h6>
                @endif
            </div>

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-6">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Nom du commerce</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
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
                                    <th>Commerce</th>
                                    <th>Adresse</th>
                                    <th>Télephone</th>
                                    <th>E-mail</th>
                                    <!--<th>Chiffre réaliser</th>
                                    <th>Chiffre perçu</th>
                                    <th>Chiffre en attente</th>
                                    <th>Statut</th>-->
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($shops as $key => $value)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#" class="avatar" data-toggle="modal" data-target="#info_shop_{{ $value->id }}"><img src="assets-back/img/products/image-7.png" alt=""></a>
                                                <a href="#" data-toggle="modal" data-target="#info_shop_{{ $value->id }}">{{ $value->name }}<span>{{ $value->categorieShop->name }}</span></a>
                                            </h2>
                                        </td>
                                        <td class="text-center">{{ $value->address }}</td>
                                        <td>{{ $value->phone }}</td>
                                        <td>{{ $value->email }}</td>
                                        <!--<td>8500 €</td>
                                        <td>7000 €</td>
                                        <td>1000 €</td>
                                        <td>
                                        <span class="badge bg-inverse-success">Ouvert</span>
                                        </td>-->
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <!--<a class="dropdown-item" href="#" data-toggle="modal" data-target="#lock_shop"><i class="fa fa-lock m-r-5"></i>Bloquer</a>-->
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#info_shop_{{ $value->id }}"><i class="fa fa-eye m-r-5"></i>Détails</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_shop_{{ $value->id }}"><i class="fa fa-trash-o m-r-5"></i>Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Delete User Modal -->
                                        <div class="modal custom-modal fade" id="delete_shop_{{ $value->id }}" role="dialog">
                                            <div class="modal-dialog modal-dialog-centered">
                                                <div class="modal-content" >
                                                    <div class="modal-body">
                                                        <div class="form-header">
                                                            <h3>Supprimer le shop</h3>
                                                            <p>Voulez-vous vraiment supprimer ce shop ?</p>
                                                        </div>
                                                        <div class="modal-btn delete-action">
                                                            <div class="row">
                                                                <div class="col-6">
                                                                    <a href={{ route('shop.destroy', $value->id) }} class="btn btn-primary continue-btn">Supprimer</a>
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
                                    <!-- /Delete User Modal -->
                                    <!-- Info shop Modal -->
                                    <div class="modal custom-modal fade" id="info_shop_{{ $value->id }}" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="form-header">
                                                        <h2>Informations sur le shop</h2>
                                                        <h3 class="user-name m-t-0 mb-0">Nom: <span class="ps1">{{ $value->name }}</span></h3>
                                                        <h6 class="text-muted">Catégorie: {{ $value->categorieShop->name }}</h6>
                                                        <div class="staff-id">Description : <span class="ps1">{{ $value->description }}</span></div>
                                                        <div class="staff-id">Site web : <span class="ps1">{{ $value->web_site }}</span></div>
                                                        <div class="staff-id">Email : <span class="ps1">{{ $value->email }}</span></div>
                                                        <div class="staff-id">Téléphone : <span class="ps1">{{ $value->phone }}</a></div>
                                                        <div class="staff-id">Pays : <span class="ps1">{{ $value->country }}</span></div>
                                                        <div class="staff-id">Ville : <span class="ps1">{{ $value->city }}</span></div>
                                                        <div class="staff-id">Adresse : <span class="ps1">{{ $value->address }}</span></div>
                                                        <div class="staff-id">Responsable commerce : <a href="profile.html">{{ $value->user->name }}</a></div>
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
                                    <!-- Info shop Modal -->
                                @endforeach
                                <!--<tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar" data-toggle="modal" data-target="#info_shop"><img src="assets-back/img/products/image-8.png" alt=""></a>
                                            <a href="#" data-toggle="modal" data-target="#info_shop">Restaurant-02<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td>10000 €</td>
                                    <td>8500 €</td>
                                    <td>7000 €</td>
                                    <td>1000 €</td>
                                    <td>
                                    <span class="badge bg-inverse-warning">Bloquer</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#lock_shop"><i class="fa fa-lock m-r-5"></i>Bloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unlock_shop"><i class="fa fa-unlock m-r-5"></i>Débloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_shop"><i class="fa fa-trash-o m-r-5"></i>Supprimer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar" data-toggle="modal" data-target="#info_shop"><img src="assets-back/img/products/image-9.png" alt=""></a>
                                            <a href="#" data-toggle="modal" data-target="#info_shop">Restaurant-03<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td class="text-center">14, Rue Chanoinesse, Paris 75004</td>
                                    <td>10000 €</td>
                                    <td>8500 €</td>
                                    <td>7000 €</td>
                                    <td>1000 €</td>
                                    <td>
                                    <span class="badge bg-inverse-danger">Supprimer</span>
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#lock_shop"><i class="fa fa-lock m-r-5"></i>Bloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#unlock_shop"><i class="fa fa-unlock m-r-5"></i>Débloquer</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_shop"><i class="fa fa-trash-o m-r-5"></i>Supprimer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>-->
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Lock shop Modal -->
        <div class="modal custom-modal fade" id="lock_shop" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Bloquer le shop</h3>
                            <p>Voulez-vous bloquer ce shop? </p>
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
        <!-- Lock shop Modal -->

        <!-- Unlock shop Modal -->
        <div class="modal custom-modal fade" id="unlock_shop" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Débloquer le shop</h3>
                            <p>Voulez-vous débloquer ce shop? </p>
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

        <!-- Delete User Modal -->
        <div class="modal custom-modal fade" id="delete_shop" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" >
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Supprimer le shop</h3>
                            <p>Voulez-vous vraiment supprimer ce shop? </p>
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
        <!-- /Delete User Modal -->

        <!-- Info shop Modal -->
        <div class="modal custom-modal fade" id="info_shop" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h2>Information sur le shop</h2>
                            <h3 class="user-name m-t-0 mb-0">Nom: <span class="ps1">Restaurant-01</span></h3>
                            <h6 class="text-muted">Statut: Actif</h6>
                            <div class="staff-id">ID Boutique : <span class="ps1">FT-0001</span></div>
                            <div class="staff-id">Date de création: <span class="ps1">1st Jan 2022</span></div>
                            <div class="staff-id">Genre : <span class="ps1">Restaurants</span></div>
                            <div class="staff-id">Téléphone: <span class="ps1">9876543210</a></div>
                            <div class="staff-id">Email: <span class="ps1">johndoe@example.com</span></div>
                            <div class="staff-id">Adresse: <span class="ps1">1861 Bayonne Ave, Manchester Township, NJ, 08759</span></div>
                            <div class="staff-id">Responsable commerce: <a href="profile.html">Jeffery Lalor</a></div>
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
        <!-- Info shop Modal -->
    </div>
    <!-- /Page Wrapper -->
@endsection
