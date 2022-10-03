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
                        <h3 class="page-title">Mes produits</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Ma boutique</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_produit"><i class="fa fa-plus"></i> Ajouter un produit</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <form action="">
                <div class="row filter-row">
                    <div class="col-sm-6 col-md-6">
                        <div class="form-group form-focus">
                            <input type="text" name="search" class="form-control floating">
                            <label class="focus-label">Nom produit</label>
                        </div>
                    </div>
                    <div class="col-sm-6 col-md-6">
                        <button class="btn btn-success btn-block">Recherche</button>
                    </div>
                </div>
            </form>
            <!-- Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive" style="overflow-x: hidden;">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>description</th>
                                    <th>Prix</th>
                                    <th>Categorie</th>
                                    <th>Statut</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $product)
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <img src="{{asset('assets-back/img/profiles/avatar-13.jpg')}}" alt="" class="avatar">
                                            {{$product->name}}
                                        </h2>
                                    </td>
                                    <td>{{Str::limit($product->description, 30, '...') }}</td>
                                    <td>{{$product->price}} €</td>
                                    <td>{{$product->categorie_name}}</td>
                                    <td>
                                        @if ($product->active == 1)
                                            <span class="badge bg-inverse-success">Activer</span>
                                        @else
                                            <span class="badge bg-inverse-danger">Désactiver</span>
                                        @endif
                                        {{-- <div class="dropdown action-label">
                                            <a href="#" class="btn btn-white btn-sm btn-rounded dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="fa fa-dot-circle-o text-success"></i> Active </a>
                                            <div class="dropdown-menu">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#active_produit"><i class="fa fa-dot-circle-o text-success"></i> Active</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#desactive_produit"><i class="fa fa-dot-circle-o text-danger"></i> Inactive</a>
                                            </div>
                                        </div> --}}
                                    </td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                @if ($product->active == 1)
                                                    <a class="dropdown-item" href="{{route('vendeur-isActivated-product',$product->id)}}" ><i class="fa fa-dot-circle-o text-danger"></i> Désactiver</a>
                                                @else
                                                    <a class="dropdown-item" href="{{route('vendeur-isActivated-product',$product->id)}}" ><i class="fa fa-dot-circle-o text-success"></i> Activer</a>
                                                @endif
                                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" id="edit_produit" data-url="{{route('vendeur-show-edit-product',$product->id)}}"><i class="fa fa-pencil m-r-5 text-danger"></i> Modifier</a>
                                                <a class="dropdown-item" href="javascript:void(0);" data-toggle="modal" id="delete_produit" data-url="{{route('vendeur-deleteProductModal',$product->id)}}"><i class="fa fa-trash-o m-r-5 text-danger"></i> Supprimer</a>
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

        <!-- Add Leave Modal -->
        <div id="add_produit" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter un produit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('vendeur-add-product')}}" method="POST">
                            @csrf
                            <div class="form-group">
                                <label>Nom produit <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" name="name" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Prix produit <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" name="price" type="text" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Categorie</label>
                                <select class="form-control" name="categorie">
                                    @if (count($categories)>=1)
                                        @foreach ($categories as $cat )
                                            <option value="{{$cat->id}}">{{$cat->name}}</option>
                                        @endforeach
                                    @else
                                        <option disabled>Veuillez créer une catégorie ...</option>
                                    @endif
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Image <span class="text-danger">*</span></label>
                                <div class="">
                                    <input class="form-control" name="image" type="file">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Description<span class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control" name="description" required></textarea>
                            </div>
                            <div class="submit-section">
                                {{-- <input type="text" name="shop_id" class="d-none" value="{{$product->shop_id}}"> --}}
                                <button class="btn btn-primary submit-btn">Enregistrer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add product Modal -->

        <!-- Edit product Modal -->
        <div id="editproduitModal" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier un produit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form action="{{route('vendeur-edit-product')}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div id="edit-Product">
                                {{-- <div class="form-group">
                                    <label>Nom produit <span class="text-danger">*</span></label>
                                    <div >
                                        <input class="form-control" name="name" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Prix produit <span class="text-danger">*</span></label>
                                    <div >
                                        <input class="form-control" name="price" type="text" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Image <span class="text-danger">*</span></label>
                                    <div class="">
                                        <input class="form-control" name="image" type="file">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <label>Description<span class="text-danger">*</span></label>
                                    <textarea rows="4" class="form-control" name="description" required></textarea>
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
        <!-- /Edit product Modal -->

        {{-- <!-- Desactive produit Modal -->
        <div class="modal custom-modal fade" id="desactive_produit" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Deactiver le produit</h3>
                            <p>Voulez-vous vraiment deactiver ce produit?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Désactiver</a>
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
        <!-- /Active produit Modal -->
        <div class="modal custom-modal fade" id="active_produit" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Activer le produit</h3>
                            <p>Voulez-vous vraiment activer ce produit?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Activer</a>
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
        <!-- Delete Leave Modal -->
        <div class="modal custom-modal fade" id="deleteProduitModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Supprimer le produit</h3>
                            <p>Voulez-vous vraiment supprimer ce produit?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row" id="deleteProduct">
                                {{-- <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Supprimer</a>
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
        <!-- /Delete Leave Modal -->
    </div>
    <!-- /Page Wrapper -->
@endsection
