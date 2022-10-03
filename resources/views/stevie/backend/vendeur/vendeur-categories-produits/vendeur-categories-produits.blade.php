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
                        <h3 class="page-title">Catégories produits</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Ma boutique</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Ajouter une catégorie</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <form action="">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12">
                         <div class="form-group form-focus">
                             <input type="text" class="form-control floating" name="search">
                             <label class="focus-label">Nom catégorie</label>
                         </div>
                    </div>
                    <div class="col-sm-6 col-md-6 col-lg-6 col-xl-6 col-12">
                        <button class="btn btn-success btn-block">Recherche</button>
                    </div>
                 </div>
            </form>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Catégorie</th>
                                    <th>Description</th>
                                    <th class="text-center">Statut</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($categorie as $cat )
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#">{{$cat->name}}</a>
                                        </h2>
                                    </td>
                                    <td>{{$cat->description}}</td>
                                    <td class="text-center">
                                        @if ($cat->active == 1)
                                            <span class="badge bg-inverse-success">Activer</span>
                                        @else
                                            <span class="badge bg-inverse-danger">Désactiver</span>
                                        @endif
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @if ($cat->active == 1)
                                                    <a class="dropdown-item" href="{{route('vendeur-isActivated-categorie',$cat->id)}}" ><i class="fa fa-dot-circle-o text-danger"></i> Désactiver</a>
                                                @else
                                                    <a class="dropdown-item" href="{{route('vendeur-isActivated-categorie',$cat->id)}}" ><i class="fa fa-dot-circle-o text-success"></i> Activer</a>
                                                @endif
                                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" id="edit_categorie" data-url="{{route('vendeur-show-edit-categorie',$cat->id)}}"><i class="fa fa-pencil m-r-5 text-danger"></i> Modifier</a>
                                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" id="delete_categorie" data-url="{{route('vendeur-deleteCategorieModal',$cat->id)}}"><i class="fa fa-trash-o m-r-5 text-danger"></i> Supprimer</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
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
                        <h5 class="modal-title">Créer une nouvelle catégorie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('vendeur-add-categorie')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                {{-- <input type="text" class="d-none" name="user_id" value="{{$vendeur->id}}"> --}}
                                <label>Nom categorie <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" type="text" name="name">
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
        <div id="editCategorieModal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier une catégorie</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('vendeur-edit-categorie')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div id="editCategorie">
                                {{-- <div class="form-group">
                                    <input type="text" class="d-none" value="{{$vendeur->id}}">
                                    <label>Nom categorie <span class="text-danger">*</span></label>
                                    <div >
                                        <input class="form-control" type="text" name="name">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description<span class="text-danger">*</span></label>
                                    <textarea rows="4" class="form-control" name="description"></textarea>
                                </div> --}}
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Modifier</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit catégorie-product Modal -->

        <!-- Active status catégorie-product  Modal -->
        <div class="modal custom-modal fade" id="deleteCategorieModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Activer le statut catégorie produit</h3>
                            <p>Voulez-vous vraiment Activer cette catégorie?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div id="deleteCategorie" class="row">
                                {{-- <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Modifier</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Annuler</a>
                                </div> --}}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Active status catégorie-product  Modal -->

        <!-- Desactive status catégorie-product  Modal -->
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
        <!-- /Desactive status catégorie-product  Modal -->

        <!-- Delete category-product Modal -->
        <div class="modal custom-modal fade" id="delete_approve" role="dialog">
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
        </div>
        <!-- /Delete Leave Modal -->

    </div>
    <!-- /Page Wrapper -->
@endsection
