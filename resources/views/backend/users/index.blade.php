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
                        <h3 class="page-title">Utilisateurs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="/">Dashboard</a></li>
                            <li class="breadcrumb-item active">Users</li>
                        </ul>
                    </div>
                    <div class="col-auto float-right ml-auto">
                        <a href="#" class="btn add-btn" data-toggle="modal" data-target="#add_user"><i
                                class="fa fa-plus"></i> Liste des utilisateurs</a>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

          <!-- Search Filter -->
					<div class="row filter-row">
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus">
								<input type="text" class="form-control floating">
								<label class="focus-label">Nom</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus select-focus">
								<select class="select floating">
									<option>Select emal address</option>
									<option>barrycuda@example.com</option>
									<option>johnsmith@example.com</option>
								</select>
								<label class="focus-label">Email</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<div class="form-group form-focus select-focus">
								<select class="select floating">
									<option>Super admin</option>
									<option>Admin</option>
									<option>Client</option>
									<option>Livreur</option>
									<option>Responsable commerce</option>
									<option>Vendeur</option>
								</select>
								<label class="focus-label">Role</label>
							</div>
						</div>
						<div class="col-sm-6 col-md-3">
							<a href="#" class="btn btn-success btn-block">Recherche </a>
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
                                    <th>Email</th>
                                    <th>Téléphone</th>
                                    <th>Created Date</th>
                                    <th>Role</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @forelse ($users as $user)
                                    <tr>
                                        <td>
                                            <h2 class="table-avatar">
                                                <a href="#" class="avatar"><img
                                                        src="/public/assets-back/img/profiles/avatar-19.jpg" alt=""></a>
                                                <a href="#">
                                                    {{ $user->name }}
                                                    @foreach ($user->roles as $role)
                                                        <span> {{ $role->name }}</span>
                                                    @endforeach
                                                </a>
                                            </h2>
                                        </td>
                                        <td>{{ $user->email }}</td>
                                        <td>{{ $user->phone->phone ?? null }}</td>
                                        <td>{{ Carbon\Carbon::parse($user->created_at)->format('d M. Y') }}</td>
                                        <td>
                                            <span class="badge bg-inverse-danger">Admin</span>
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
                                    <span>Aucune donné recuperer</span>
                                @endforelse

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Page Content -->

        <!-- Add User Modal -->
        <div id="add_user" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Add User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="select">
                                            <option>Admin</option>
                                            <option>Client</option>
                                            <option>Employee</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <select class="select">
                                            <option>Global Technologies</option>
                                            <option>Delta Infotech</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Employee ID <span class="text-danger">*</span></label>
                                        <input type="text" class="form-control floating">
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-15">
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
                                            <td>Employee</td>
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
                                            <td>Holidays</td>
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
                                            <td>Leaves</td>
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
                                            <td>Events</td>
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
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Add User Modal -->

        <!-- Edit User Modal -->
        <div id="edit_user" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Edit User</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="row">
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>First Name <span class="text-danger">*</span></label>
                                        <input class="form-control" value="John" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Last Name</label>
                                        <input class="form-control" value="Doe" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Username <span class="text-danger">*</span></label>
                                        <input class="form-control" value="johndoe" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Email <span class="text-danger">*</span></label>
                                        <input class="form-control" value="johndoe@example.com" type="email">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Confirm Password</label>
                                        <input class="form-control" type="password">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Phone </label>
                                        <input class="form-control" value="9876543210" type="text">
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Role</label>
                                        <select class="select">
                                            <option>Admin</option>
                                            <option>Client</option>
                                            <option selected>Employee</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Company</label>
                                        <select class="select">
                                            <option>Global Technologies</option>
                                            <option>Delta Infotech</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-sm-6">
                                    <div class="form-group">
                                        <label>Employee ID <span class="text-danger">*</span></label>
                                        <input type="text" value="FT-0001" class="form-control floating">
                                    </div>
                                </div>
                            </div>
                            <div class="table-responsive m-t-15">
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
                                            <td>Employee</td>
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
                                            <td>Holidays</td>
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
                                            <td>Leaves</td>
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
                                            <td>Events</td>
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
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Save</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Edit User Modal -->

        <!-- Delete User Modal -->
        <div class="modal custom-modal fade" id="delete_user" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Delete User</h3>
                            <p>Are you sure want to delete?</p>
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
        <!-- /Delete User Modal -->

    </div>
    <!-- /Page Wrapper -->

@endsection
