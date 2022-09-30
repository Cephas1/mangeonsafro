@extends('stevie.layouts.app-front')
@section('content')
    <!-- Product Details Section Begin -->
    <section class="commerce">
        <!-- Add background slide Begin -->
        @include('stevie.layouts.banner-front')
        <!-- Add background slide End -->
        <div class="product-details listShop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banniereHeader">
                            <h2>Détails produits</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <div class="container com-d">
                                <div class="row">
                                    <div class="col-lg-6 col-md-6">
                                        <div class="product__details__pic">
                                            <div class="product__details__pic__item">
                                                <img class="product__details__pic__item--large"
                                                    src="{{asset('assets-front/img/product/details/product-details-1.jpg')}}" alt="">
                                            </div>
                                            <div class="product__details__pic__slider owl-carousel">
                                                <img data-imgbigurl="assets-front/img/product/details/product-details-2.jpg"
                                                    src="{{asset('assets-front/img/product/details/thumb-1.jpg')}}" alt="">
                                                <img data-imgbigurl="assets-front/img/product/details/product-details-3.jpg"
                                                    src="{{asset('assets-front/img/product/details/thumb-2.jpg')}}" alt="">
                                                <img data-imgbigurl="assets-front/img/product/details/product-details-5.jpg"
                                                    src="{{asset('assets-front/img/product/details/thumb-3.jpg')}}" alt="">
                                                <img data-imgbigurl="assets-front/img/product/details/product-details-4.jpg"
                                                    src="{{asset('assets-front/img/product/details/thumb-4.jpg')}}" alt="">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6">
                                        <div class="product__details__text">
                                            <h3>Paquet de légumes</h3>
                                            <div class="product__details__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                                <span>(18 revues)</span>
                                            </div>
                                            <div class="product__details__price">100.00€</div>
                                            <p>Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a. Vestibulum ac diam sit amet quam
                                                vehicula elementum sed sit amet dui. Sed porttitor lectus nibh. Vestibulum ac diam sit amet
                                                quam vehicula elementum sed sit amet dui. Proin eget tortor risus.</p>
                                            <div class="product__details__quantity">
                                                <div class="quantity">
                                                    <div class="pro-qty">
                                                        <input type="text" value="1">
                                                    </div>
                                                </div>
                                            </div>
                                            <a href="#" class="primary-btn">Ajouter à la carte</a>
                                            <a href="#" class="heart-icon"><span class="icon_heart_alt"></span></a>
                                            <ul>
                                                <li><b>Disponibilité</b> <span>En Stock</span></li>
                                                <li><b>expédition</b><span>01 jour d'expédition.<samp>Retrait gratuit aujourd'hui</samp></span></li>
                                                <li><b>Poids</b> <span>0.5 kg</span></li>
                                                <li><b>Partager sur</b>
                                                    <div class="share">
                                                        <a href="#"><i class="fa fa-facebook"></i></a>
                                                        <a href="#"><i class="fa fa-twitter"></i></a>
                                                        <a href="#"><i class="fa fa-instagram"></i></a>
                                                        <a href="#"><i class="fa fa-pinterest"></i></a>
                                                    </div>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                    <div class="col-lg-12">
                                        <div class="product__details__tab">
                                            <ul class="nav nav-tabs" role="tablist">
                                                <li class="nav-item">
                                                    <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                                        aria-selected="true">Description</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                                        aria-selected="false">Information</a>
                                                </li>
                                                <li class="nav-item">
                                                    <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                                        aria-selected="false">Revues <span>(1)</span></a>
                                                </li>
                                            </ul>
                                            <div class="tab-content">
                                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                                    <div class="product__details__tab__desc">
                                                        <h6>Infomation sur les produits</h6>
                                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                                            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus. Vivamus
                                                            suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam sit amet quam
                                                            vehicula elementum sed sit amet dui. Donec rutrum congue leo eget malesuada.
                                                            Vivamus suscipit tortor eget felis porttitor volutpat. Curabitur arcu erat,
                                                            accumsan id imperdiet et, porttitor at sem. Praesent sapien massa, convallis a
                                                            pellentesque nec, egestas non nisi. Vestibulum ac diam sit amet quam vehicula
                                                            elementum sed sit amet dui. Vestibulum ante ipsum primis in faucibus orci luctus
                                                            et ultrices posuere cubilia Curae; Donec velit neque, auctor sit amet aliquam
                                                            vel, ullamcorper sit amet ligula. Proin eget tortor risus.</p>
                                                            <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                                            elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                                            porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                                            nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.
                                                            Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui. Sed
                                                            porttitor lectus nibh. Vestibulum ac diam sit amet quam vehicula elementum
                                                            sed sit amet dui. Proin eget tortor risus.</p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tabs-2" role="tabpanel">
                                                    <div class="product__details__tab__desc">
                                                        <h6>Infomation sur les produits</h6>
                                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                                            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                                            Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                                            sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                                            eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                                            sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                                            diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                                            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                                            Proin eget tortor risus.</p>
                                                        <p>Praesent sapien massa, convallis a pellentesque nec, egestas non nisi. Lorem
                                                            ipsum dolor sit amet, consectetur adipiscing elit. Mauris blandit aliquet
                                                            elit, eget tincidunt nibh pulvinar a. Cras ultricies ligula sed magna dictum
                                                            porta. Cras ultricies ligula sed magna dictum porta. Sed porttitor lectus
                                                            nibh. Mauris blandit aliquet elit, eget tincidunt nibh pulvinar a.</p>
                                                    </div>
                                                </div>
                                                <div class="tab-pane" id="tabs-3" role="tabpanel">
                                                    <div class="product__details__tab__desc">
                                                        <h6>Infomation sur les produits</h6>
                                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                                            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                                            Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                                            sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                                            eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                                            sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                                            diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                                            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                                            Proin eget tortor risus.</p>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="container com-d com-k">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="section-title related__product__title">
                                            <h2>Nos meilleurs produits</h2>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-1.jpg">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6><a href="{{route('product-details')}}">Viande Fraiche</a></h6>
                                                <h5>30.00€</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-2.jpg">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6><a href="{{route('product-details')}}">Bananes</a></h6>
                                                <h5>30.00€</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-3.jpg">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6><a href="{{route('product-details')}}">Fruits</a></h6>
                                                <h5>30.00€</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-7.jpg">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6><a href="{{route('product-details')}}">Pastèque</a></h6>
                                                <h5>30.00€</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Modal evaluation -->
        <div class="modal fade" id="evalModal" role="dialog">
            <div class="modal-dialog modal-dialog-centered" role="document">
              <div class="modal-content">
                <div class="modal-body">
                    <div class="rating-wrap">
                        <form action="">
                            <h2>Evaluer!</h2>
                            <div class="center">
                                <div class="rating">
                                    <input type="radio" id="star5" name="rating" value="5" /><label for="star5" class="full"
                                        title="Awesome"></label>
                                    <input type="radio" id="star4.5" name="rating" value="4.5" /><label for="star4.5"
                                        class="half"></label>
                                    <input type="radio" id="star4" name="rating" value="4" /><label for="star4"
                                        class="full"></label>
                                    <input type="radio" id="star3.5" name="rating" value="3.5" /><label for="star3.5"
                                        class="half"></label>
                                    <input type="radio" id="star3" name="rating" value="3" /><label for="star3"
                                        class="full"></label>
                                    <input type="radio" id="star2.5" name="rating" value="2.5" /><label for="star2.5"
                                        class="half"></label>
                                    <input type="radio" id="star2" name="rating" value="2" /><label for="star2"
                                        class="full"></label>
                                    <input type="radio" id="star1.5" name="rating" value="1.5" /><label for="star1.5"
                                        class="half"></label>
                                    <input type="radio" id="star1" name="rating" value="1" /><label for="star1"
                                        class="full"></label>
                                    <input type="radio" id="star0.5" name="rating" value="0.5" /><label for="star0.5"
                                        class="half"></label>
                                </div>
                                <div class="text-center">
                                    <textarea class="form-control mb-2" placeholder="Votre commentaire" style="resize:none;" rows="5" cols="30"
                                     maxlength="250"></textarea>
                                    <button type="submit" class="site-btn">Envoyer</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
              </div>
            </div>
          </div>
        <!-- Modal evaluation -->
    </section>
    <!-- Product Details Section End -->
@endsection
