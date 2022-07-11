@extends('layouts.app-back')

@section('content')

    <!-- Page Wrapper -->
    <div class="page-wrapper">
        <!-- Page Content -->
        <div class="error-box">
            <h1>Bientôt disponible</h1>
            <p>cette page sera bientôt disponible.</p>
            <a href="{{ route('dashboard') }}" class="btn btn-custom">Retour au Tableau de bord</a>
        </div>
    </div>
    <!-- /Page Wrapper -->

@endsection