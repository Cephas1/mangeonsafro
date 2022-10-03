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
                        <h3 class="page-title">Gestion des utilisateurs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Catégories utilisateurs</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_produit"><i class="fa fa-plus"></i> Ajouter une Catégories</a>
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
                        <label class="focus-label">Catégories</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-6">
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
                                    <th>#</th>
                                    <th>Catégories</th>
                                    <th>date de création</th>
                                    <th class="text-center">date de dernière modification</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($roles as $key => $role)
                                    <tr>
                                        <td>{{$key+1 }}</td>
                                        <td>{{$role->name }}</td>
                                        <td>{{ $role->created_at }}</td>
                                        <td class="text-center">{{ $role->updated_at }}</td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_cat_{{ $role->id }}"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_cat_{{ $role->id }}"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Edit product Modal -->
                                    <div id="edit_cat_{{ $role->id }}" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">Modifier une catégorie</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="POST" action={{ route('admin-categories-users.edit', $role->id) }}>
                                                        @csrf
                                                        <div class="form-group">
                                                            <label>Attention ! La modification de cette information peut entrainer de graves répercutions dans le fonctionnement global du systeme ! <span class="text-danger">*</span></label>
                                                            <label>Catégories utilisateurs <span class="text-danger">*</span></label>
                                                            <div >
                                                                <input class="form-control" type="text" name="name" value="{{ $role->name }}">
                                                            </div>
                                                        </div>
                                                        <!--<div class="form-group">
                                                            <label>Description<span class="text-danger">*</span></label>
                                                            <textarea rows="4" class="form-control"></textarea>
                                                        </div>-->
                                                        <div class="submit-section">
                                                            <button class="btn btn-primary submit-btn">Enregistrer</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Edit product Modal -->

                                    <!-- Supprimer catégorie Modal -->
                                    <div class="modal custom-modal fade" id="delete_cat_{{ $role->id }}" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="form-header">
                                                        <h3>Supprimer la catégorie</h3>
                                                        <p>Voulez-vous supprimer cette catégorie?</p>
                                                        <p>Attention ! La modification de cette information peut entrainer de graves répercutions dans le fonctionnement global du systeme ! </p>
                                                    </div>
                                                    <div class="modal-btn delete-action">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <a href={{ route('admin-categories-users.destroy', $role->id) }} class="btn btn-primary continue-btn">Supprimer</a>
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
                                @endforeach
                                <!--<tr>
                                    <td>Vendeurs</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_produit"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_cat"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Clients</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_produit"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_cat"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
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

        <!-- Add Leave Modal -->
        <div id="add_produit" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter une catégorie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action={{ route('admin-categories-users.add') }} method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Catégories utilisateurs <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <!--<div class="form-group">
                                <label>Description<span class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>-->
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add product Modal -->

        <!-- Edit product Modal -->
        <div id="edit_cat" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier une catégorie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Catégories utilisateurs <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description<span class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit product Modal -->

        <!-- Supprimer catégorie Modal -->
        <div class="modal custom-modal fade" id="delete_cat" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Supprimer la catégorie</h3>
                            <p>Voulez-vous supprimer cette catégorie?</p>
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

    </div>
    <!-- /Page Wrapper -->
@endsection
