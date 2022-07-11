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
                        <h3 class="page-title">Rapport livreur</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">Rapport livreur</li>
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
                        <label class="focus-label">Nom livreur</label>
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
                        <div class="cal-icon">
                            <input class="form-control floating datetimepicker" type="text">
                        </div>
                        <label class="focus-label">Date</label>
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
                        <table class="table table-striped custom-table mb-0 datatable">
                            <thead>
                                <tr>
                                    <th>Livreurs</th>
                                    <th>Nom</th>
                                    <th>Date</th>
                                    <th>Téléphone</th>
                                    <th>Ville</th>
                                    <th>Pays</th>
                                    <th class="text-center">Statut</th>										</tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-09.jpg"></a>
                                            <a href="#">Richard Miles <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Casual Leave</td>
                                    <td>8 Mar 2019</td>
                                    <td>2 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-02.jpg"></a>
                                            <a>	John Doe  <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Medical Leave</td>
                                    <td>27 Feb 2019</td>
                                    <td>1 day</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-10.jpg"></a>
                                            <a>John Smith <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>LOP</td>
                                    <td>24 Feb 2019</td>
                                    <td>2 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i> Approved</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i> Declined</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-05.jpg"></a>
                                            <a>Mike Litorus  <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Paternity Leave</td>
                                    <td>13 Feb 2019</td>
                                    <td>5 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i> Desactive
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-24.jpg"></a>
                                            <a>Richard Parker <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Casual Leave</td>
                                    <td>30 Jan 2019</td>
                                    <td>2 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i> Active
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-08.jpg"></a>
                                            <a>Catherine Manseau <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Maternity Leave</td>
                                    <td>5 Jan 2019</td>
                                    <td>10 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i>Active
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-15.jpg"></a>
                                            <a>Buster Wigton <span>Web Developer</span></a>
                                        </h2>
                                    </td>
                                    <td>Hospitalisation</td>
                                    <td>15 Jan 2019</td>
                                    <td>10 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i>Active
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-20.jpg"></a>
                                            <a>Melita Faucher <span>Web Developer</span></a>
                                        </h2>
                                    </td>
                                    <td>Casual Leave</td>
                                    <td>13 Jan 2019</td>
                                    <td>2 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i>Desactive
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-03.jpg"></a>
                                            <a>Tarah Shropshire <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Casual Leave</td>
                                    <td>10 Jan 2019</td>
                                    <td>1 day</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i>Desactive
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-20.jpg"></a>
                                            <a>Domenic Houston <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Casual Leave</td>
                                    <td>10 Jan 2019</td>
                                    <td>2 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i>Active
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-02.jpg"></a>
                                            <a>John Doe <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Casual Leave</td>
                                    <td>9 Jan 2019</td>
                                    <td>2 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-success"></i>Active
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-25.jpg"></a>
                                            <a>Rolland Webber <span>Livreur</span></a>
                                        </h2>
                                    </td>
                                    <td>Casual Leave</td>
                                    <td>7 Jan 2019</td>
                                    <td>2 days</td>
                                    <td>lorem ipsum</td>
                                    <td>lorem ipsum</td>
                                    <td class="text-center">
                                        <div class="dropdown action-label">
                                            <a class="btn btn-white btn-sm btn-rounded dropdown-toggle" href="#" data-toggle="dropdown" aria-expanded="false">
                                                <i class="fa fa-dot-circle-o text-danger"></i>Desactive
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#approve_leave"><i class="fa fa-dot-circle-o text-success"></i>Active</a>
                                                <a class="dropdown-item" href="#"><i class="fa fa-dot-circle-o text-danger"></i>Desactive</a>
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
