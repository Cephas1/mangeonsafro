@extends('stevie.layouts.app-front')
@section('content')
    <section style="height: 100%;" class="blog-details-hero set-bg">
         <!-- Add background slide Begin -->
         @include('stevie.layouts.banner-front')
         <!-- Add background slide End -->
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="blog__details__hero__text">
                        <h2>Bientôt disponible...</h2>
                        <h4><a href="{{route('home')}}">Accueil</a> </h4>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
