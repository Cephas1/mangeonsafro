@extends('stevie.layouts.app-back-admin')
@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">

            <!-- Page Header -->
            <!-- Page Header -->
            <div class="page-header">
                <div class="row align-items-center">
                    <div class="col">
                        <h3 class="page-title">Gestion des utilisateurs</h3>
                        <ul class="breadcrumb">
                            <li class="breadcrumb-item"><a href="{{route('admin-home')}}">Dashboard</a></li>
                            <li class="breadcrumb-item active">Liste des utilisateurs</li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- /Page Header -->
            <!-- /Page Header -->

            <!-- Search Filter -->
            <div class="row filter-row">
                <div class="col-sm-6 col-md-4">
                    <div class="form-group form-focus">
                        <input type="text" class="form-control floating">
                        <label class="focus-label">Nom</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <div class="form-group form-focus select-focus">
                        <select class="select floating">
                            <option>Type de commerces</option>
                            <option>Restaurants</option>
                            <option>Epiceries</option>
                            <option>Faits maison</option>
                        </select>
                        <label class="focus-label">Statut</label>
                    </div>
                </div>
                <div class="col-sm-6 col-md-4">
                    <a href="#" class="btn btn-success btn-block"> Recherche... </a>
                </div>
            </div>
            <!-- Search Filter -->

            <!-- Eval shop -->
            <div class="row" style="margin-bottom: 30px;">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-striped custom-table datatable">
                            <thead>
                                <tr>
                                    <th>Commerce</th>
                                    <th>Type de commerce</th>
                                    <th>Notes</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar" data-toggle="modal" data-target="#shop_commentaire"><img src="assets-back/img/products/image-7.png" alt=""></a>
                                            <a href="#" data-toggle="modal" data-target="#shop_commentaire">Restaurant-01<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td>Restaurants</td>
                                    <td>
                                    <span class="badge bg-inverse-success">5.0</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar" data-toggle="modal" data-target="#shop_commentaire"><img src="assets-back/img/products/image-8.png" alt=""></a>
                                            <a href="#" data-toggle="modal" data-target="#shop_commentaire">Restaurant-02<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td>Restaurants</td>
                                    <td>
                                    <span class="badge bg-inverse-warning">3.5</span>
                                    </td>
                                </tr>
                                <tr>
                                    <td>
                                        <h2 class="table-avatar">
                                            <a href="#" class="avatar" data-toggle="modal" data-target="#shop_commentaire"><img src="assets-back/img/products/image-9.png" alt=""></a>
                                            <a href="#" data-toggle="modal" data-target="#shop_commentaire">Restaurant-03<span>+33 6 95 88 19 19</span></a>
                                        </h2>
                                    </td>
                                    <td>Restaurants</td>
                                    <td>
                                    <span class="badge bg-inverse-danger">2.0</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <!--End Eval shop -->

        </div>
        <!-- /Page Content -->


        <!-- Send commentaire Modal -->
        <div class="modal custom-modal fade" id="shop_commentaire" role="dialog">
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content" style="width: 900px; right: 100px;">
                    <div class="modal-body">
                        <div class="form-header">
                            <h3>Liste des commentaires</h3>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table class="table table-striped custom-table datatable">
                                            <thead>
                                                <tr>
                                                    <th>Nom client</th>
                                                    <th>Message</th>
                                                    <th>date</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-17.jpg" alt=""></a>
                                                            <a href="profile.html">Phill Lambert</a>
                                                        </h2>
                                                    </td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                                    <td>11/08/2022</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-11.jpg" alt=""></a>
                                                            <a href="profile.html">Clark kent</a>
                                                        </h2>
                                                    </td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                                    <td>11/08/2022</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-29.jpg" alt=""></a>
                                                            <a href="profile.html">Loïs Lane</a>
                                                        </h2>
                                                    </td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                                    <td>11/08/2022</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-05.jpg" alt=""></a>
                                                            <a href="profile.html">Thors</a>
                                                        </h2>
                                                    </td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                                    <td>11/08/2022</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-07.jpg" alt=""></a>
                                                            <a href="profile.html">Lupus Regina</a>
                                                        </h2>
                                                    </td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                                    <td>11/08/2022</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-28.jpg" alt=""></a>
                                                            <a href="profile.html">Nico Robin</a>
                                                        </h2>
                                                    </td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                                    <td>11/08/2022</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-14.jpg" alt=""></a>
                                                            <a href="profile.html">Luffy Senpaï</a>
                                                        </h2>
                                                    </td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                                    <td>11/08/2022</td>
                                                </tr>
                                                <tr>
                                                    <td>
                                                        <h2 class="table-avatar">
                                                            <a href="profile.html" class="avatar"><img src="assets-back/img/profiles/avatar-16.jpg" alt=""></a>
                                                            <a href="profile.html">Super Mario</a>
                                                        </h2>
                                                    </td>
                                                    <td>Lorem ipsum, dolor sit amet consectetur adipisicing elit. </td>
                                                    <td>11/08/2022</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="modal-btn delete-action">
                            <div class="row">
                                <div class="col-12">
                                    <a href="javascript:void(0);" data-dismiss="modal" class="btn btn-primary cancel-btn">Fermer</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- /Send commentaire Modal -->

    </div>
    <!-- /Page Wrapper -->
@endsection
