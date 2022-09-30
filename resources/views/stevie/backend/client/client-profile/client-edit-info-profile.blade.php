    <!-- Edit info Modal -->
    <div id="profile_info" class="modal custom-modal fade" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Profil information</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="{{route('client-edit-profile',$client->id)}}" method="POST">
                        @csrf
                        @method('PUT')
                        <div class="row">
                            <div class="col-md-12">
                                <div class="profile-img-wrap edit-img">
                                    <img class="inline-block" src="{{asset('assets-back/img/profiles/avatar-02.jpg')}}" alt="user">
                                    <div class="fileupload btn">
                                        <span class="btn-text">edit</span>
                                        <input class="upload" type="file">
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Prénom</label>
                                            <input type="text" class="form-control" name="first_name" value="{{$client->first_name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Nom</label>
                                            <input type="text" class="form-control" name="name" value="{{$client->name}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Date d'anniversaire</label>
                                            <div class="cal-icon">
                                                <input class="form-control datetimepicker" name="birthday" type="text" value="{{$client->birthday}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Téléphone</label>
                                            <input type="text" class="form-control" name="phone" value="{{$client->phone}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Adresse email</label>
                                            <input type="text" class="form-control" name="email" value="{{$client->email}}">
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label>Genre</label>
                                            <select class="form-control " name="gender">
                                                @if ($client->gender=='homme')
                                                <option value="Homme"selected>Homme</option>
                                                <option value="Femme">Femme</option>
                                                @elseif ($client->gender=='femme')
                                                <option value="Homme">Homme</option>
                                                <option value="Femme" selected>Femme</option>
                                                @else
                                                <option value="Homme"selected>Homme</option>
                                                <option value="Femme">Femme</option>
                                                @endif
                                            </select>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Adresse</label>
                                    <input type="text" class="form-control" name="address" value="{{$client->address}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>ville</label>
                                    <input type="text" class="form-control" name="ville" value="{{$client->ville}}">
                                </div>
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label>Pays</label>
                                    <input type="text" class="form-control" name="pays" value="{{$client->pays}}">
                                </div>
                            </div>
                        </div>
                        <div class="submit-section">
                            <button class="btn btn-primary submit-btn">Modifier</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <!-- /Edit info Modal -->
