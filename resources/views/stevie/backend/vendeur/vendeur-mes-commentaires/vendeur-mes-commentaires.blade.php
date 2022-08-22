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
                        <h3 class="page-title">Mes commentaires</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('vendeur-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Liste des commentaires</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Nom client</th>
                                    <th>Message</th>
                                    <th>date</th>
                                    <th class="text-right">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <img src="assets-back/img/profiles/avatar-17.jpg" alt="" class="avatar">
                                            Phill Lambert
                                        </h2>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                    <td>11/08/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#send_commentaire"><i class="fa fa-pencil m-r-5"></i> Repondre</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <img src="assets-back/img/profiles/avatar-11.jpg" alt="" class="avatar">
                                            Clark Kent
                                        </h2>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                    <td>11/08/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#send_commentaire"><i class="fa fa-pencil m-r-5"></i> Repondre</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <img src="assets-back/img/profiles/avatar-29.jpg" alt="" class="avatar">
                                            Loïs Lane
                                        </h2>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                    <td>11/08/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#send_commentaire"><i class="fa fa-pencil m-r-5"></i> Repondre</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <img src="assets-back/img/profiles/avatar-05.jpg" alt="" class="avatar">
                                            Thors
                                        </h2>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                    <td>11/08/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#send_commentaire"><i class="fa fa-pencil m-r-5"></i> Repondre</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <img src="assets-back/img/profiles/avatar-07.jpg" alt="" class="avatar">
                                            Lupus Regina
                                        </h2>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                    <td>11/08/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#send_commentaire"><i class="fa fa-pencil m-r-5"></i> Repondre</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <img src="assets-back/img/profiles/avatar-28.jpg" alt="" class="avatar">
                                            Nico Robin
                                        </h2>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                    <td>11/08/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#send_commentaire"><i class="fa fa-pencil m-r-5"></i> Repondre</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <img src="assets-back/img/profiles/avatar-14.jpg" alt="" class="avatar">
                                            Luffy Senpaï
                                        </h2>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                    <td>11/08/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#send_commentaire"><i class="fa fa-pencil m-r-5"></i> Repondre</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <img src="assets-back/img/profiles/avatar-16.jpg" alt="" class="avatar">
                                            Super Mario
                                        </h2>
                                    </td>
                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                    <td>11/08/2022</td>
                                    <td class="text-right">
                                        <div class="dropdown dropdown-action">
                                            <a href="#" class="action-icon dropdown-toggle" data-toggle="dropdown" aria-expanded="false"><i class="material-icons">more_vert</i></a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#send_commentaire"><i class="fa fa-pencil m-r-5"></i> Repondre</a>
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

        <!-- Send commentaire Modal -->
        <div id="send_commentaire" class="modal custom-modal fade" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title">Repondre au commentaire</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <form>
                            <div class="form-group">
                                <label>Répondre à <span class="text-danger">*</span></label>
                                <div >
                                    <input class="form-control" type="text">
                                </div>
                            </div>
                            <div class="form-group">
                                <label>Message<span class="text-danger">*</span></label>
                                <textarea rows="4" class="form-control"></textarea>
                            </div>
                            <div class="submit-section">
                                <button class="btn btn-primary submit-btn">Envoyer</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Send commentaire Modal -->
    </div>
    <!-- /Page Wrapper -->
@endsection
