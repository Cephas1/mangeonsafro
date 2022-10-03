    <!-- Edit info Modal -->
    <div id="profile_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profil informations</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                @if(Route::is('admin-profile'))
                    <form method="POST" action="{{route('admin-profile.edit', $admin->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block" src="{{asset('assets-back/img/profiles/avatar-02.jpg')}}" alt="user">
                                    {{-- <img class="inline-block" src="{{asset($admin->image->url)}}" alt="user"> --}}
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="picture">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" class="form-control" name="first_name" {{ "value=".$admin->first_name }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="name" {{ "value=".$admin->name }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date d'anniversaire</label>
                                            <div class="cal-icon">
                                                <input class="form-control datepicker" type="date" name="birthday" {{ "value=".$admin->birthday }}>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <input type="text" class="form-control" name="phone" {{ "value=".$admin->phone }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Adresse email</label>
                                            <input type="text" class="form-control" name="email" {{ "value=".$admin->email }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <select class="form-control" name = "gender">
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" {{ "value=".$admin->address }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>ville</label>
                                    <input type="text" class="form-control" name="ville" {{ "value=".$admin->city }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pays</label>
                                    <input type="text" class="form-control" name="pays" {{ "value=".$admin->country }}>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Modifier</button>
                        </div>
                    </form>
                @elseif(Route::is('vendeur-profile'))
                    <form method="POST" action="{{route('admin-profile.edit',$vendeur->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block" src="{{asset($admin->image->url)}}" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="picture">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" class="form-control" name="first_name" {{ "value=".$vendeur->first_name }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="name" {{ "value=".$vendeur->name }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date d'anniversaire</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text" name="birthday" {{ "value=".$vendeur->birthday }}>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <input type="text" class="form-control" name="phone" {{ "value=".$vendeur->phone }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Adresse email</label>
                                            <input type="text" class="form-control" name="email" {{ "value=".$vendeur->email }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <select class="form-control" name = "gender">
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" {{ "value=".$vendeur->address }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>ville</label>
                                    <input type="text" class="form-control" name="ville" {{ "value=".$vendeur->city }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pays</label>
                                    <input type="text" class="form-control" name="pays" {{ "value=".$vendeur->counrty }}>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Modifier</button>
                        </div>
                    </form>
                @elseif(Route::is('client-profile'))
                    <form method="POST" action="{{route('admin-profile.edit',$client->id)}}" enctype="multipart/form-data">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block" src="{{asset($admin->image->url)}}" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file" name="picture">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" class="form-control" name="first_name" {{ "value=".$client->first_name }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="name" {{ "value=".$client->name }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date d'anniversaire</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" type="text" name="birthday" {{ "value=".$client->birthday }}>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <input type="text" class="form-control" name="phone" {{ "value=".$client->phone }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Adresse email</label>
                                            <input type="text" class="form-control" name="email" {{ "value=".$client->email }}>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <select class="form-control" name = "gender">
                                                <option value="homme">Homme</option>
                                                <option value="femme">Femme</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Address</label>
                                    <input type="text" class="form-control" name="address" {{ "value=".$client->first_name }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>ville</label>
                                    <input type="text" class="form-control" name="ville" {{ "value=".$client->city }}>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pays</label>
                                    <input type="text" class="form-control" name="pays" {{ "value=".$client->country }}>
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Modifier</button>
                        </div>
                    </form>
                @endif
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit info Modal -->
