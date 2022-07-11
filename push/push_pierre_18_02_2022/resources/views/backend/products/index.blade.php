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
                        <h3 class="page-title">Produits</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">liste produits</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leave"><i class="fa fa-plus"></i> Ajouter un produit</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Leave Statistics -->
            <div class="row">
                <div class="col-md-3">
                    <div class="stats-info">
                        <h6>Produits</h6>
                        <h4>{{ $productCount }}</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-info">
                        <h6>Responsables commerce</h6>
                        <h4>8</h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-info">
                        <h6>Livreurs</h6>
                        <h4>0 </h4>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="stats-info">
                        <h6>Commandes</h6>
                        <h4>12</h4>
                    </div>
                </div>
            </div>
            <!-- /Leave Statistics -->

            <!-- Search Filter -->
            <div class="row filter-row">
               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Nom produit</label>
                    </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option> -- Select -- </option>
                            @foreach ($categoryProducts as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        <label class="focus-label">Catégorie produit</label>
                    </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option> -- Select -- </option>
                            <option> Active </option>
                            <option> Desactive </option>
                            <option> Autres</option>
                        </select>
                        <label class="focus-label">Statut produit</label>
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
               <!-- <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <div class="cal-icon">
                            <input class="form-control floating datetimepicker" type="text">
                        </div>
                        <label class="focus-label">To</label>
                    </div>
                </div> -->
               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <a href="#" class="btn btn-success btn-block"> Recherche </a>
               </div>
            </div>
            <!-- /Search Filter -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Produits</th>
                                    <th>Prix</th>
                                    <th>Date</th>
                                    <th>Description</th>
                                    <th class="text-center">Statut</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($products as $key => $product)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#" class="avatar"><img alt="" src="{{asset('assets-back/img/profiles/avatar-02.jpg')}}"></a>
                                                <a href="#"> <span>{{$product->name}}</span></a>
                                            </h2>
                                        </td>
                                        <td> {{ number_format($product->price, 2) }} FCFA</td>
                                        <td> {{ $product->created_at }} </td>
                                        <td> {{ Str::substr($product->description, 0, 15) }} </td>
                                        <td class="text-center">
                                            <div class="dropdown action-label">
                                                <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                    <i class="fa fa-dot-circle-o text-success"></i> {{ $product->active == 1 ? "Activé" : "Désactivé" }}
                                                </a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    @if ($product->active == 1)
                                                        <a class="dropdown-item" href="{{ route('products.active', $product->id) }}"><i class="fa fa-dot-circle-o text-danger"></i> Désactiver</a>
                                                    @else
                                                        <a class="dropdown-item" href="{{ route('products.active', $product->id) }}"><i class="fa fa-dot-circle-o text-"></i> Activer</a>
                                                    @endif
                                                <!--</div>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-"></i> Activer</a>
                                                    <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Désactiver</a>
                                                </div>-->
                                            </div>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_leave_{{ $product->id }}"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_approve_{{ $product->id }}"><i class="fa fa-trash-o m-r-5"></i> Effacer</a>

                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <!-- Delete Leave Modal -->
                                    <div class="modal custom-modal fade" id="delete_approve_{{ $product->id }}" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered">
                                            <div class="modal-content">
                                                <div class="modal-body">
                                                    <div class="form-header">
                                                        <h3>SUPPRESSION DE PRODUIT</h3>
                                                        <p>Êtes-vous sûr de vouloir éffacer ce produit?</p>
                                                    </div>
                                                    <div class="modal-btn delete-action">
                                                        <div class="row">
                                                            <div class="col-6">
                                                                <a href="{{ route('products.destroy', $product->id) }}" class="btn btn-primary continue-btn">Supprimer</a>
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
                                    <!-- Edit product Modal -->
                                    <div id="edit_leave_{{ $product->id }}" class="modal custom-modal fade" role="dialog">
                                        <div class="modal-dialog modal-dialog-centered" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title">MODIFICATION DE PRODUIT</h5>
                                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    <form method='post' action="{{ route('products.edit') }}" enctype="multipart/form-data" id="setEditId">
                                                        @csrf
                                                        <input type="hidden" name="id" value="{{ $product->id }}">
                                                        <div class="form-group">
                                                            <label>Nom du produit <span class="text-danger">*</span></label>
                                                            <div>
                                                                <input class="form-control" type="text" value="{{ $product->name }}" name="name">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Catégories <span class="text-danger">*</span></label>
                                                            <div>
                                                                <select class="select" name="category_product_id">
                                                                    <option>-- Choix de catégorie --</option>
                                                                    @foreach ($categoryProducts as $category)
                                                                        @if ($product->categories[0]->name == $category->name)
                                                                            <option value="{{ $category->id }}" selected>{{ $category->name }}</option>
                                                                        @else
                                                                            <option value ="{{ $category->id }}" >{{ $category->name }}</option>
                                                                        @endif
                                                                        {{-- <option value ="{{ $category->id }}" >{{ $category->name }}</option> --}}
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label> Shops relatifs <span class="text-danger">*</span></label>
                                                            <div>
                                                                <select class="select" name="shop_id">
                                                                    <option>-- Choix du shop --</option>
                                                                    @foreach ($shops as $shop)
                                                                        @if ($product->shop_id == $shop->id)
                                                                            <option value="{{ $shop->id }}" selected>{{ $shop->name }}</option>
                                                                        @else
                                                                            <option value ="{{ $shop->id }}" >{{ $shop->name }}</option>
                                                                        @endif
                                                                        {{-- <option value ="{{ $shop->id }}" >{{ $shop->name }}</option> --}}
                                                                    @endforeach
                                                                </select>
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Prix du produit <span class="text-danger">*</span></label>
                                                            <div >
                                                                <input class="form-control" type="number" value="{{ number_format($product->price, 2) }}" name="price">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Image <span class="text-danger">*</span></label>
                                                            <div class="">
                                                                <input class="form-control" type="file" multiple name="images[]">
                                                            </div>
                                                        </div>
                                                        <div class="form-group">
                                                            <label>Description<span class="text-danger">*</span></label>
                                                            <textarea rows="4" class="form-control" name="description">{{ $product->description }}</textarea>
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
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Leave Modal -->
        <div id="add_leave" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">AJOUT DE PRODUIT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action="" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label>Nom produit <span class="text-danger">*</span></label>
                                <div >
                                    <input required class="form-control" type="text" name="name">
                                </div>
                            </div>

                            <div class="form-group">
                                <label> Catégories <span class="text-danger">*</span></label>
                                <div>
                                    <select required class="select" name="category_id">
                                        <option>-- Choix de catégorie --</option>
                                        @foreach ($categoryProducts as $category)
                                            <option value ="{{ $category->id }}" >{{ $category->name }}</option>
                                        @endforeach
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label> Boutiques <span class="text-danger">*</span></label>
                                <select required class="select" name="shop_id">
                                    <option>-- Choix de boutiques --</option>
                                    @foreach ($shops as $shop)
                                        <option value ="{{ $shop->id }}" >{{ $shop->name }}</option>
                                    @endforeach
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Montant du produit <span class="text-danger">*</span></label>
                                <div >
                                    <input required class="form-control" type="number" name="price">
                                </div>
                            </div>

                            <div class="form-group">
                                <label>Description<span class="text-danger">*</span></label>
                                <div>
                                    <textarea required rows="4" class="form-control" name="description"></textarea>
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image <span class="text-danger">*</span></label>
                                <div>
                                    <input required class="form-control" multiple type="file" name="images[]">
                                </div>
                            </div>
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
        <div id="edit_leave" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">MODIFICATION DE PRODUIT</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form method='post' action="" enctype="multipart/form-data" id="setEditId">
                            @csrf
                            <input type="hidden" id="inputId2" value="">
                            <div class="form-group">
                                <label>Nom du produit <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" type="text" value="">
                                </div>
                            </div>
                            <div class="form-group">
                                <label> Catégories <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>-- Choix de catégorie --</option>
                                    @foreach ($categoryProducts as $category)
                                        <option value ="{{ $category->id }}" >{{ $category->name }}</option>
                                    @endforeach
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
        </div>
        <!-- /Edit product Modal -->

        <!-- Deactive  Modal -->
        <div class="modal custom-modal fade" id="approve_leave" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>DESACTIVATION DE PRODUIT</h3>
                            <p>Voulez-vous vraiment désactiver ce produit?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Approuver</a>
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
        <!-- /Approve Leave Modal -->

        <!-- Delete Leave Modal -->
        <div class="modal custom-modal fade" id="delete_approve" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>SUPPRESSION DE PRODUIT</h3>
                            <p>Êtes-vous sûr de vouloir éffacer ce produit?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="" class="btn btn-primary continue-btn">Supprimer</a>
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

    <script type="text/javascript">



    </script>

@endsection
