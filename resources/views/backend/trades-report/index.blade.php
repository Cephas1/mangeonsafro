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
                        <h3 class="page-title">Rapport commerce</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Rapport commerce</li>
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
                        <label class="focus-label">Nom...</label>
                    </div>
                </div>
               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option> -- Select -- </option>
                            <option> Active </option>
                            <option> Desactive </option>
                        </select>
                        <label class="focus-label">Statut</label>
                    </div>
               </div>
               <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <div class="">
                            <input class="form-control floating" type="text">
                        </div>
                        <label class="focus-label">Pays</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3 col-lg-3 col-xl-2 col-12">
                    <div class="form-group form-focus">
                        <div class="">
                            <input class="form-control floating" type="text">
                        </div>
                        <label class="focus-label">Ville</label>
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
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nom</th>
                                    <th>Restaurant ID</th>
                                    <th>Contac responsable</th>
                                    <th>Email</th>
                                    <th>Mobile</th>
                                    <th>Catégorie</th>
                                    <th>Statut</th>
                                    <th>Total livreur </th>
                                    <th>Pays</th>
                                    <th>Ville</th>
                                    <th>Toltal produit</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="client-profile" class="avatar"><img src="{{ asset("assets-back/img/profiles/avatar-13.jpg") }}" alt=""></a>
                                            <a href="client-profile">Nom commerce</a>
                                        </h2>
                                    </td>
                                    <td>REST-0001</td>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="client-profile" class="avatar"><img src="{{ asset("assets-back/img/profiles/avatar-13.jpg") }}" alt=""></a>
                                            <a href="client-profile">+33 6 95 88 19 19</a>
                                        </h2>
                                    </td>
                                    <td>
                                        contact@mangeonsafro.com
                                    </td>
                                    <td>+33 6 95 88 19 19</td>
                                    <td>Restaurant</td>
                                    <td class="text-center">
                                        <i class="fa fa-dot-circle-o text-success"></i> Active

                                    </td>
                                    <td class="text-center">14</td>
                                    <td class="text-center">France</td>
                                    <td class="text-center">Paris</td>
                                    <td class="text-center">80</td>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        <!-- Deactive  Modal -->
        <div class="modal custom-modal fade" id="approve_leave" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Deactiver le livreur</h3>
                            <p>Voulez-vous vraiment deactiver ce livreur?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Approve</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Decline</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Active livreur Modal -->

        <!-- Delete livreur Modal -->
        <div class="modal custom-modal fade" id="delete_approve" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Leave</h3>
                            <p>Are you sure want to delete this leave?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete livreur Modal -->

    </div>
    <!-- /Page Wrapper -->

@endsection
