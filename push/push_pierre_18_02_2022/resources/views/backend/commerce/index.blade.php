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
                        <h3 class="page-title">Commerces</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">liste commerce</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_client"><i class="fa fa-plus"></i> Ajouter un commerce</a>
                        <div class="view-icons">
                            <a href="commerce" class="grid-view btn btn-link active"><i class="fa fa-th"></i></a>
                            <a href="list-commerce" class="list-view btn btn-link"><i class="fa fa-bars"></i></a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">restaurant ID</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Non</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option>Statut</option>
                            <option>Active</option>
                            <option>Inactive</option>
                        </select>
                        <label class="focus-label">Statut</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-3">
                    <a href="#" class="btn btn-success btn-block"> Recherche... </a>
                </div>
            </div>
            <!-- Search Filter -->

            <div class="row staff-grid-row">
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="client-profile" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-13.jpg"></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                        <div class="dropdown-menu dropdown-menu-right">
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Modifier </a>
                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
                        </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Restaurant01</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Lorem ipsum </a></h5>
                        <!-- <div class="small text-muted">CEO</div> -->
                        <a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
                        <a href="client-profile" class="btn btn-white btn-sm m-t-10">Voir plus</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="client-profile" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-13.jpg"></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i>Supprimer</a>
                            </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Restaurant02</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Lorem ipsum</a></h5>
                        <!-- <div class="small text-muted">Manager</div> -->
                        <a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
                        <a href="client-profile" class="btn btn-white btn-sm m-t-10">Voir plus</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="client-profile" class="avatar"><img src="{{ asset("assets-back/img/profiles/avatar-13.jpg") }}" alt=""></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Supprimer </a>
                            </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Restaurant03</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Lorem ipsum</a></h5>
                        <!-- <div class="small text-muted">CEO</div> -->
                        <a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
                        <a href="client-profile" class="btn btn-white btn-sm m-t-10">Voir plus </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="client-profile" class="avatar"><img src="{{ asset("assets-back/img/profiles/avatar-13.jpg") }}" alt=""></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
                            </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Restaurant04</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Lorem ipsum</a></h5>
                        <!-- <div class="small text-muted">CEO</div> -->
                        <a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
                        <a href="client-profile" class="btn btn-white btn-sm m-t-10">Voir plus</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="client-profile" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-13.jpg"></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Modifier </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Supprimer </a>
                            </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Restaurant05</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Lorem ipsum</a></h5>
                        <!-- <div class="small text-muted">CEO</div> -->
                        <a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
                        <a href="client-profile" class="btn btn-white btn-sm m-t-10">Voir plus</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="client-profile" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-13.jpg"></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Modifier </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Supprimer </a>
                            </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Restaurant06</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Lorem ipsum</a></h5>
                        <!-- <div class="small text-muted">CEO</div> -->
                        <a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
                        <a href="client-profile" class="btn btn-white btn-sm m-t-10">Voir plus</a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="client-profile" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-13.jpg"></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Modifier </a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Supprimer </a>
                            </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Restaurant07</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Lorem ipsum</a></h5>
                        <!-- <div class="small text-muted">CEO</div> -->
                        <a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
                        <a href="client-profile" class="btn btn-white btn-sm m-t-10">Voir plus </a>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-12 col-lg-4 col-xl-3">
                    <div class="profile-widget">
                        <div class="profile-img">
                            <a href="client-profile" class="avatar"><img alt="" src="/public/assets-back/img/profiles/avatar-13.jpg"></a>
                        </div>
                        <div class="dropdown profile-action">
                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                            <div class="dropdown-menu dropdown-menu-right">
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#edit_client"><i class="fa fa-pencil m-r-5"></i> Modifier</a>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#delete_client"><i class="fa fa-trash-o m-r-5"></i> Supprimer</a>
                            </div>
                        </div>
                        <h4 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Restaurant08</a></h4>
                        <h5 class="user-name m-t-10 mb-0 text-ellipsis"><a href="client-profile">Lorem ipsum</a></h5>
                        <a href="#" class="btn btn-white btn-sm m-t-10">Message</a>
                        <a href="client-profile" class="btn btn-white btn-sm m-t-10">Voir plus </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add Client Modal -->
        <div id="add_client" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Ajouter un commerce</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Last Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                        <input class="form-control floating" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Confirm Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Client ID <span class="text-danger">*</span></label>
                                        <input class="form-control floating" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Phone </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Company Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Projects</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tasks</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chat</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Estimates</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Invoices</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timing Sheets</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- </div> -->
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add Client Modal -->

        <!-- Edit Client Modal -->
        <div id="edit_client" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier un restaurant</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" value="Barry" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Last Name</label>
                                        <input class="form-control" value="Cuda" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Username <span class="text-danger">*</span></label>
                                        <input class="form-control" value="barrycuda" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Email <span class="text-danger">*</span></label>
                                        <input class="form-control floating" value="barrycuda@example.com" type="email">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Password</label>
                                        <input class="form-control" value="barrycuda" type="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Confirm Password</label>
                                        <input class="form-control" value="barrycuda" type="password">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Client ID <span class="text-danger">*</span></label>
                                        <input class="form-control floating" value="CLT-0001" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Phone </label>
                                        <input class="form-control" value="9876543210" type="text">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label class="col-form-label">Company Name</label>
                                        <input class="form-control" type="text" value="Global Technologies">
                                    </div>
                                </div>
                            </div>
                            <table class="table table-striped custom-table">
                                <thead>
                                    <tr>
                                        <th>Module Permission</th>
                                        <th class="text-center">Read</th>
                                        <th class="text-center">Write</th>
                                        <th class="text-center">Create</th>
                                        <th class="text-center">Delete</th>
                                        <th class="text-center">Import</th>
                                        <th class="text-center">Export</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Projects</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Tasks</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Chat</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Estimates</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Invoices</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>Timing Sheets</td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                        <td class="text-center">
                                            <input checked="" type="checkbox">
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                            <!-- </div> -->
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit Client Modal -->

        <!-- Delete Client Modal -->
        <div class="modal custom-modal fade" id="delete_client" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete Client</h3>
                            <p>Are you sure want to delete?</p>
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
        <!-- /Delete Client Modal -->
    </div>
    <!-- /Page Wrapper -->

@endsection
