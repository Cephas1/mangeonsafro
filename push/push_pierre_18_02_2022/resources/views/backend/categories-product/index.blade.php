@extends('layouts.app-back')

@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">
            @if (session('success'))
                    <h6 class="alert alert-success">{{ session('success') }}</h6>
                @elseif (session('error'))
                    <h6 class="alert alert-danger">{{ session('error') }}</h6>
                @elseif (session('warning'))
                    <h6 class="alert alert-danger">{{ session('warning') }}</h6>
                @endif

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Catégorie produit</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">Liste catégorie</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Ajouter une catégorie</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="row filter-row">
               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Nom catégorie...</label>
                    </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option> -- Select -- </option>
                            <option> Active </option>
                            <option> Inactive </option>
                        </select>
                        <label class="focus-label">Statut catégorie</label>
                    </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <div class="cal-icon">
                            <input class="form-control floating datetimepicker" type="text">
                        </div>
                        <label class="focus-label">Date</label>
                    </div>
                </div>

               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <a href="#" class="btn btn-success btn-block"> Recherche </a>
               </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Catégorie</th>
                                    <th>Designation</th>
                                    <th>Description</th>
                                    <th>Date</th>
                                    <th class="text-center">Statut</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($categorie as $key => $category)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/products/image-1.png"></a>
                                                <a href="#"></a>
                                            </h2>
                                        </td>
                                        <td>{{ $category->name }}</td>
                                        <td> {{ Str::substr($category->description, 0, 20)."..." }} </td>
                                        {{-- <td> {{ (count($category->description)>20)? @dataDot20($category->description) : $category->description }} </td> --}}
                                        <td>{{ $category->created_at }}</td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-success"></i> {{ ($category->active == 0)? "Désactivée" : "Activée" }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    @if ($category->active == 1)
                                                        <a class="dropdown-item" href="{{ route('categories-product.active', $category->id) }}"><i class="fa fa-dot-circle-o text-danger"></i> Désactiver</a>
                                                    @else
                                                        <a class="dropdown-item" href="{{ route('categories-product.active', $category->id) }}"><i class="fa fa-dot-circle-o text-"></i> Activer</a>
                                                    @endif
                                                    {{-- <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Activer</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#desactive_status"><i class="fa fa-dot-circle-o text-danger"></i> Desactiver</a> --}}
                                                </div>
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave_{{ $category->id }}" data-name="{{ $category->name }}" data-active="{{ $category->active }}" data-description="{{ $category->description }}" data-image=""><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve{{ $category->id }}"><i class="fa fa-trash-o m-r-5"></i> Effacer</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Edit category-product Modal -->
                                    <div id="edit_leave_{{ $category->id }}" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">MODIFICATION DE CATEGORIE</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method="post" action="{{ route('categories-product.edit') }}">
                                                        <div class="form-group">
                                                            <label>Designation <span class="text-danger">*</span></label>
                                                            <div >
                                                                <input class="form-control" type="text" value="{{ $category->name }}">
                                                            </div>
                                                        </div>
                                                        {{-- <div class="form-group">
                                                            <label>Statut catégorie<span class="text-danger">*</span></label>
                                                            <div>
                                                                <select class="select">
                                                                    @if (($category->active)==0)
                                                                        <option selected>Catégorie désativée</option>
                                                                        <option>Activer la categorie</option>
                                                                    @else
                                                                        <option selected>Catégorie ativée</option>
                                                                        <option>Désactiver la categorie</option>
                                                                    @endif
                                                                </select>
                                                            </div>
                                                        </div> --}}
                                                        <div class="form-group">
                                                            <label>Image <span class="text-danger">*</span></label>
                                                            <div class="">
                                                                <input class="form-control" type="file">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description<span class="text-danger">*</span></label>
                                                            <textarea rows="4" class="form-control">{{ $category->description }}</textarea>
                                                        </div>
                                                        <div class="submit-section">
                                                            <button class="btn btn-primary submit-btn">Enregistrer</button>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Edit category-product Modal -->
                                    <!-- Delete category-product Modal -->
                                    <div class="modal custom-modal fade" id="delete_approve{{ $category->id }}" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="form-header">
                                                        <h3>SUPPRESSION DE CATEGORIE </h3>
                                                        <p> Voulez-vous vraiment supprimer {{ $category->name }} ?</p>
                                                    </div>
                                                    <div class="modal-btn delete-action">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <a href="{{ route('categories-product.destroy', $category->id) }}" class="btn btn-primary continue-btn">Supprimer</a>
                                                            </div>
                                                            <div class="col-6">
                                                                <a href="#" data-dismiss="modal" class="btn btn-primary cancel-btn">Annuler</a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /Delete Leave Modal -->
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add catégorie-product -->
        <div id="add_leave" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">CREATION DE CATEGORIE</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method="POST" action="{{ route('categories-product.store') }}">
                            @csrf
                            <div class="form-group">
                                <label>Designation <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" type="text" name="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Statut catégorie<span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Active</option>
                                    <option>Desactive</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image <span class="text-danger">*</span></label>
                                <div class="">
                                    <input class="form-control" type="file" multiple name="images[]">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description<span class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control" name="description"></textarea>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add catégorie-product Modal -->

        <!-- Edit catégorie-product Modal -->
        {{-- <div id="edit_leave" class="modal custom-modal fade" role="dialog">
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
                                <label>Designation <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" type="text" id="name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Statut catégorie<span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Active</option>
                                    <option>Desactive</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image <span class="text-danger">*</span></label>
                                <div class="">
                                    <input class="form-control" type="file">
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
        </div> --}}
        <!-- /Edit catégorie-product Modal -->

        <!-- Active status catégorie-product  Modal -->
        <div class="modal custom-modal fade" id="approve_leave" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Activer le statut catégorie produit</h3>
                            <p>Voulez-vous vraiment Activer cette catégorie?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Modifier</a>
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
        <!-- /Active status catégorie-product  Modal -->

        <!-- Active status catégorie-product  Modal -->
        <div class="modal custom-modal fade" id="desactive_status" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Désactiver le statut catégorie produit</h3>
                            <p>Voulez-vous vraiment désactiver cette catégorie?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Modifier</a>
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
        <!-- /Active status catégorie-product  Modal -->

        <!-- Delete category-product Modal -->
        {{-- <div class="modal custom-modal fade" id="delete_approve" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Supprimer la catégorie</h3>
                            <p>
                                Voulez-vous vraiment supprimer cette catégorie?</p>
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
        </div> --}}
        <!-- /Delete Leave Modal -->

    </div>
    <!-- /Page Wrapper -->

@endsection
