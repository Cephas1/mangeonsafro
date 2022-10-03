@extends('stevie.layouts.app-front')

@section('content')
    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center ">
                    <div class="section-title product__discount__title text-center">
                        <h2>Notre selection</h2>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                @foreach($products as $product)
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <div class="row">
                                <a href="{{route('commerce-page',$product['0']->shop->id)}}">
                                    <div class="row air">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="Air-Picture-Shop">
                                                <img src="assets-front/img/shop/business-plan-epicerie.jpg" alt="" class="air-img">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="Shop-Details">
                                                <div class="Shop-legend">
                                                    <span class="title-shop">{{ $product['0']->shop->name }}</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 py-3">
                            <div class="product__discount__slider owl-carousel">
                                @foreach($product as $value)
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="assets-front/img/product/discount/pd-1.jpg">
                                            <!-- <div class="product__discount__percent">-20%</div> -->
                                            <ul class="product__item__pic__hover">
                                                <li><a href="{{route('isfavoris',$value->id)}}"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                <li><a href="{{route('product-details', $value->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span></span>
                                            <h5><a href={{ route('product-details', $value->id) }}>{{ $value->name }}</a></h5>
                                            <div class="product__item__price">{{ $value->price }}€<span>€{{ $value->price+2.5 }}</span></div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                @endforeach
                </div>
                {{--<div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <div class="row">
                                <a href="#">
                                    <div class="row air">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="Air-Picture-Shop">
                                                <img src="assets-front/img/shop/business-plan-epicerie.jpg" alt="" class="air-img">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="Shop-Details">
                                                <div class="Shop-legend">
                                                    <span class="title-shop">Nom Du Commerce</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 py-3">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="assets-front/img/product/discount/pd-1.jpg">
                                            <!-- <div class="product__discount__percent">-20%</div> -->
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Fruits Secs</span>
                                            <h5><a href="#">Raisins & nuts</a></h5>
                                            <div class="product__item__price">30.00€<span>€36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="assets-front/img/product/discount/pd-2.jpg">
                                            <!-- <div class="product__discount__percent">-20%</div> -->
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Légumes</span>
                                            <h5><a href="#">Paquet de Legume</a></h5>
                                            <div class="product__item__price">30.00€<span>€36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="assets-front/img/product/discount/pd-3.jpg">
                                            <!-- <div class="product__discount__percent">-20%</div> -->
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Fruits Secs</span>
                                            <h5><a href="#">Fruits mélangés</a></h5>
                                            <div class="product__item__price">30.00€<span>€36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="assets-front/img/product/discount/pd-4.jpg">
                                            <!-- <div class="product__discount__percent">-20%</div> -->
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Fruits Secs</span>
                                            <h5><a href="#">Raisins & noix</a></h5>
                                            <div class="product__item__price">30.00€<span>€36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 mb-3">
                    <div class="row">
                        <div class="col-lg-4 col-sm-12">
                            <div class="row">
                                <a href="#">
                                    <div class="row air">
                                        <div class="col-md-12 col-sm-12">
                                            <div class="Air-Picture-Shop">
                                                <img src="assets-front/img/shop/business-plan-epicerie.jpg" alt="" class="air-img">
                                            </div>
                                        </div>
                                        <div class="col-md-12 col-sm-12">
                                            <div class="Shop-Details">
                                                <div class="Shop-legend">
                                                    <span class="title-shop">Nom Du Commerce</span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="col-lg-8 col-sm-12 py-3">
                            <div class="product__discount__slider owl-carousel">
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="assets-front/img/product/discount/pd-1.jpg">
                                            <!-- <div class="product__discount__percent">-20%</div> -->
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Fruits Secs</span>
                                            <h5><a href="#">Raisins & nuts</a></h5>
                                            <div class="product__item__price">30.00€<span>€36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="assets-front/img/product/discount/pd-2.jpg">
                                            <!-- <div class="product__discount__percent">-20%</div> -->
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Légumes</span>
                                            <h5><a href="#">Paquet de Legume</a></h5>
                                            <div class="product__item__price">30.00€<span>€36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="assets-front/img/product/discount/pd-3.jpg">
                                            <!-- <div class="product__discount__percent">-20%</div> -->
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Fruits Secs</span>
                                            <h5><a href="#">Fruits mélangés</a></h5>
                                            <div class="product__item__price">30.00€<span>€36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4">
                                    <div class="product__discount__item">
                                        <div class="product__discount__item__pic set-bg"
                                            data-setbg="assets-front/img/product/discount/pd-4.jpg">
                                            <!-- <div class="product__discount__percent">-20%</div> -->
                                            <ul class="product__item__pic__hover">
                                                <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                            </ul>
                                        </div>
                                        <div class="product__discount__item__text">
                                            <span>Fruits Secs</span>
                                            <h5><a href="#">Raisins & noix</a></h5>
                                            <div class="product__item__price">30.00€<span>€36.00</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>--}}
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel mb-5">
                    @foreach($lists as $key => $list)
                    <div class="col-lg-3">
                        <div class="categories__item set-bg"
                            data-setbg="{{ asset('/assets-front/img/categories/cat-1.jpg') }}">
                            <h5><a href="#">{{ Str::length($list->name) >= 17? Str::substr($list->name, 0, 14)."..." : $list->name }}</a></h5>
                        </div>
                    </div>
                    @endforeach
                    {{--<div class="col-lg-3">
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
                    </div>--}}
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Blog Section Begin -->
    {{--<section class="from-blog spad">

    </section>--}}
    <!-- Blog Section End -->

@endsection

