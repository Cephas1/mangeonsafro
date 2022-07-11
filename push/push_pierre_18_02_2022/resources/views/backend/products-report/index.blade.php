@extends('layouts.app-back')

@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Rapport produit</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Rapport produit</li>
                        </ul>
                    </div>
                    <div class="dropdown col-auto float-right ml-auto ">
                        <button class="btn add-btn dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fa fa-file"></i>Exporter
                        </button>
                        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                          <a class="dropdown-item" href="#">PDF</a>
                          <a class="dropdown-item" href="#">EXCEL</a>
                          <a class="dropdown-item" href="#">CSV</a>
                        </div>
                      </div>
                </div>
            </div>
            <!-- /Page Header -->
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
                            <option>Catégories01</option>
                            <option>Catégories02</option>
                            <option>Catégories03</option>
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
                                    <th>Nom</th>
                                    <th>Date</th>
                                    <th>Quantité</th>
                                    <th>Prix</th>
                                    <th>Catégorie</th>
                                    <th>Description</th>
                                    <th>Total prix produit</th>
                                    <th class="text-center">Statut</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/products/image-1.png"></a>
                                            <a href="#">Poulet caraïbe<span>Nom commerce</span></a>
                                        </h2>
                                    </td>
                                    <td>Poulet caraïbe</td>
                                    <td>13/01/2022</td>
                                    <td>25</td>
                                    <td>2,00 €</td>
                                    <td>Catégorie01</td>
                                    <td>2 days</td>
                                    <td>50,00 €</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-"></i> Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
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
        <!-- Add Leave Modal -->
        <div id="add_leave" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter un produit</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Nom produit <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Statut <span class="text-danger">*</span></label>
                                <select class="select">
                                    <option>Select Leave Type</option>
                                    <option>Casual Leave 12 Days</option>
                                    <option>Medical Leave</option>
                                    <option>Loss of Pay</option>
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
    </div>
    <!-- /Page Wrapper -->

@endsection
