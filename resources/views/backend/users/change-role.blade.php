@extends('layouts.app-back')

@section('content')
    <!-- Page Wrapper -->
    <div class="page-wrapper">

        <!-- Page Content -->
        <div class="content container-fluid">
            @if (Session::has('success'))
                <div class="alert alert-success">
                    {{ Session::get('success') }}
                </div>
            @endif
            @if (Session::has('error'))
                <div class="alert alert-danger">
                    {{ Session::get('error') }}
                </div>
            @endif
            <form action="{{ route('role.user.post', ['id' => $user->id]) }}" method="POST" class="row">
                @csrf
                <div class="col-sm-12">
                    <div class="panel panel-default">
                        <div style="display: flex;justify-content: space-between;padding: 8px 0" class="panel-heading">
                            <h4 class="panel-title">Liste des roles de ( {{ $user->name }} )</h4>
                            <div>
                                <button type="submit" class="btn btn-primary btn-sm pull-right">Modifier son
                                    role</button>
                                <a style="margin-right: 4px" href="{{ route('users-all.index') }}"
                                    class="btn btn-dark btn-sm pull-right">revenir</a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead>
                                        <tr>
                                            <td>Nom du role</td>
                                            <td>Actions</td>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($roles as $role)
                                            <tr>
                                                <td>{{ $role->name }}</td>
                                                <td>
                                                    <input type="checkbox" name="roles[]" value="{{ $role->id }}"
                                                        {{ $user->hasRole($role->name) ? 'checked' : '' }}>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- /Page Content -->
        </div>
    @endsection
