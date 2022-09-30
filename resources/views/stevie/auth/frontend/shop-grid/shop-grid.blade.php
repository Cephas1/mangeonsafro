@extends('stevie.layouts.app-front')
@section('content')
    <!-- Shop-grid Section Begin -->
    <section class="commerce">
        <!-- Add background slide Begin -->
        @include('stevie.layouts.banner-front')
        <!-- Add background slide End -->
        <div class="product-details listShop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banniereHeader">
                            <h2>Nos Produits</h2>
                        </div>
                    </div>
            </div>
            <div class="container com-d">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- Listes des meilleurs produits debut -->
                        <div class="product__discount">
                            <div class="section-title product__discount__title text-center">
                                <h2>Meilleurs Produits</h2>
                            </div>
                            <div class="row">
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
                                                <h5><a href="{{route('product-details')}}">Raisins & nuts</a></h5>
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
                                                <h5><a href="{{route('product-details')}}">Paquet de Legume</a></h5>
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
                                                <h5><a href="{{route('product-details')}}">Fruits mélangés</a></h5>
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
                                                <h5><a href="{{route('product-details')}}">Raisins & noix</a></h5>
                                                <div class="product__item__price">30.00€<span>€36.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg"
                                                data-setbg="assets-front/img/product/discount/pd-5.jpg">
                                                <!-- <div class="product__discount__percent">-20%</div> -->
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <span>Fruits Secs</span>
                                                <h5><a href="{{route('product-details')}}">Raisin & noix</a></h5>
                                                <div class="product__item__price">30.00€ <span>€36.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-4">
                                        <div class="product__discount__item">
                                            <div class="product__discount__item__pic set-bg"
                                                data-setbg="assets-front/img/product/discount/pd-6.jpg">
                                                <!-- <div class="product__discount__percent">-20%</div> -->
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__discount__item__text">
                                                <span>Fruits Secs</span>
                                                <h5><a href="{{route('product-details')}}">Raisin & noix</a></h5>
                                                <div class="product__item__price">30.00€ <span>€36.00</span></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Listes des meilleurs produits fin -->
                        <!-- Listes des produits debut -->
                        <div class="filter__item">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="filter__found">
                                        <h6><span>16</span> Produits trouvés</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-1.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Viande Fraiche</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-2.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Banane</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-3.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Fruits</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-4.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Raisins</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-5.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Hamburger</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-6.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Mangue</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-7.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Pastèque</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-8.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Pomme</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-9.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Jus</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-10.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Poulet</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-11.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Jus de Fruits</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-6 col-sm-6">
                                <div class="product__item">
                                    <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-12.jpg">
                                        <ul class="product__item__pic__hover">
                                            <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                            <li><a href="#"><i class="fa fa-star-o"></i></a></li>
                                            <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="product__item__text">
                                        <h6><a href="{{route('product-details')}}">Mélange de Fruits</a></h6>
                                        <h5>30.00€</h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- Listes des produits fin -->
                        <div class="product__pagination text-center">
                            <a href="#">1</a>
                            <a href="#">2</a>
                            <a href="#">3</a>
                            <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop-grid Section End -->
@endsection
