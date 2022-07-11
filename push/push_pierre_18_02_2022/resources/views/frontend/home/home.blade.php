@extends('layouts.app-front')

@section('content')
                    <div class="hero__item set-bg" data-setbg="{{ asset('assets-front/img/hero/banner.jpg') }}">
                        <div class="hero__text">
                            <span>FRUIT FRESH</span>
                            <h2>Vegetable <br />100% Organic</h2>
                            <p>Free Pickup and Delivery Available</p>
                            <a href="#" class="primary-btn">SHOP NOW</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('/assets-front/img/categories/cat-1.jpg') }}">
                            <h5><a href="#">Fresh Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('/assets-front/img/categories/cat-2.jpg') }}">
                            <h5><a href="#">Dried Fruit</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('assets-front/img/categories/cat-3.jpg') }}">
                            <h5><a href="#">Vegetables</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('assets-front/img/categories/cat-4.jpg') }}">
                            <h5><a href="#">Drink fruits</a></h5>
                        </div>
                    </div>
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('assets-front/img/categories/cat-5.jpg') }}">
                            <h5><a href="#">Meat</a></h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        
    </section>
    <!-- Blog Section End -->

@endsection

