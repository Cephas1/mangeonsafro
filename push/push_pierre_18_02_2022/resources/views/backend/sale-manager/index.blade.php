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
                        <h3 class="page-title">Responsable commerce</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index">Dashboard</a></li>
                            <li class="breadcrumb-item active">liste responsables commerce</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_leave"><i
                                class="fa fa-plus"></i>Créer un responsable commerce</a>
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
                                    <th>Commerce</th>
                                    <th>Nom</th>
                                    <th>Date</th>
                                    <th>Téléphone</th>
                                    <th>Ville</th>
                                    <th>Pays</th>
                                    <th class="text-center">Statut</th>
                                    <th class="text-right">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#" class="avatar"><img
                                                        src="/public/assets-back/img/profiles/avatar-19.jpg" alt=""></a>
                                                <a href="#">{{ $user->name }}
                                                    @foreach ($user->roles as $role)
                                                        <span>{{ $role->name }}</span><br>
                                                    @endforeach
                                                </a>
                                            </h2>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone->phone ?? null }}</td>
                                        <td>{{ Carbon\Carbon::parse($user->created_at)->format('d M. Y') }}</td>
                                        <td>
                                            <span class="badge bg-inverse-secondary">Super admin</span>
                                        </td>
                                        <td class="text-right">
                                            <div class="dropdown dropdown-action">
                                                <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown"
                                                    aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                                <div class="dropdown-menu dropdown-menu-right">
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#edit_user"><i class="fa fa-pencil m-r-5"></i> Edit</a>
                                                    <a class="dropdown-item" href="#" data-toggle="modal"
                                                        data-target="#delete_user"><i class="fa fa-trash-o m-r-5"></i>
                                                        Delete</a>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                @endforelse
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->
        <!-- Add sale-manager Modal -->
        <div id="add_leave" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Créer un responsable commerce</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Nom<span class="text-danger">*</span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Prénom<span class="text-danger">*</span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password<span class="text-danger">*</span></label>
                                <div>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Téléphone<span class="text-danger"></span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pays<span class="text-danger"></span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ville<span class="text-danger"></span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image <span class="text-danger"></span></label>
                                <div class="">
                                    <input class="form-control" type="file">
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
        <!-- /Add sale manager Modal -->
        <!-- Edit sale manager Modal -->
        <div id="edit_leave" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Modifier un livreur</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Nom<span class="text-danger">*</span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Prénom<span class="text-danger">*</span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Password<span class="text-danger">*</span></label>
                                <div>
                                    <input class="form-control" type="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Téléphone<span class="text-danger"></span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Pays<span class="text-danger"></span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Ville<span class="text-danger"></span></label>
                                <div>
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Image <span class="text-danger"></span></label>
                                <div class="">
                                    <input class="form-control" type="file">
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
        <!-- /Edit sale manager Modal -->
        <!-- Deactive sale manager Modal -->
        <div class="modal custom-modal fade" id="approve_leave" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Deactiver le responsable de commerce</h3>
                            <p>Voulez-vous vraiment deactiver ce responsable de commerce ?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Approve</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal"
                                        class="btn btn-primary cancel-btn">Decline</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Active sale manager Modal -->
        <!-- Delete sale manager Modal -->
        <div class="modal custom-modal fade" id="delete_approve" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete sale manager</h3>
                            <p>Are you sure want to delete this sale manager ?</p>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-6">
                                    <a href="javascript:void(0);" class="btn btn-primary continue-btn">Delete</a>
                                </div>
                                <div class="col-6">
                                    <a href="javascript:void(0);" data-dismiss="modal"
                                        class="btn btn-primary cancel-btn">Cancel</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Delete sale manager Modal -->

    </div>
    <!-- /Page Wrapper -->

@endsection
