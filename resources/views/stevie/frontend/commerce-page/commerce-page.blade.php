@extends('stevie.layouts.app-front')
@section('content')
<!-- Section Commerce page Begin -->
<section class="commerce">
    <!-- Add background slide Begin -->
    @include('stevie.layouts.banner-front')
    <!-- Add background slide End -->
    <div class="shop-d">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="banniereHeader">
                        <h2>Détails du commerce</h2>
                    </div>
                </div>
                <div class="col-lg-3 col-md-12">
                    <div class="sidebar com-d">
                        <div class="sidebar__item">
                            <div class="Picture-Shop">
                                <img src="./assets-front/img/shop/business-plan-epicerie.jpg" alt="">
                            </div>
                            <div class="Shop-Details-f">
                                <div class="Shop-legend">
                                    <span class="title-shop">Nom Du Commerce</span>
                                    <div class="shop-description">
                                        <span class="Shop-legend-detail">Lorem ipsum dolor sit amet consectetur adipisicing elit. Sunt quis nisi ab quas, esse optio tempora accusantium recusandae sed in?</span>
                                    </div>
                                    <div class="shop-contact">
                                        <span class="Shop-legend-detail"><i class="icon_phone"></i> +33 6 95 88 19 19</span>
                                        <span class="Shop-legend-detail"><i class="icon_mail_alt"></i> contact@mangeonsafro.com</span>
                                        <span class="Shop-legend-detail"><i class="icon_pin_alt"></i> Adresse commerce</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-9 col-md-12">
                    <div class="filter__item com-d">
                        <div class="row">
                            <div class="col-lg-2 col-md-5">
                                <div class="filter__sort com-f">
                                    <span>Catégories</span>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-5">
                                <div class="filter__found com-f">
                                    <h6><span>Restaurants</span></h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="filter__found com-f">
                                    <h6><span>16</span> Produits trouvés</h6>
                                </div>
                            </div>
                            <!-- <div class="col-lg-3 col-md-3">
                                <div class="filter__option com-f">
                                    <span class="icon_grid-2x2"></span>
                                    <span class="icon_ul"></span>
                                </div>
                            </div> -->
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <!-- Previous or Next Begin -->
                        <div class="col-lg-12 text-center">
                            <div class="product__pagination banniereHeader">
                                <!-- <a href="#"><i class="fa fa-long-arrow-left"></i></a> -->
                                <a href="#">1</a>
                                <a href="#">2</a>
                                <a href="#">3</a>
                                <a href="#"><i class="fa fa-long-arrow-right"></i></a>
                            </div>
                        </div>
                        <!-- Previous or Next End -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- Section Commerce page End -->
@endsection
