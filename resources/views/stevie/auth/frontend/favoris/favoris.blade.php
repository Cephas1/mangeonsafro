@extends('stevie.layouts.app-front')
@section('content')
<section class="commerce">
    <!-- Add background slide Begin -->
    @include('stevie.layouts.banner-front')
    <!-- Add background slide End -->
    <div class="product-details listShop">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="banniereHeader">
                        <h2>Favoris</h2>
                    </div>
                </div>
        </div>
        <div class="container com-d">
            <div class="row">
                <div class="col-lg-12">
                    <div class="filter__item com-n">
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-2.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-4.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
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
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
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
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
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
                        <div class="col-lg-3 col-md-6 col-sm-6">
                            <div class="product__item">
                                <div class="product__item__pic set-bg" data-setbg="assets-front/img/product/product-8.jpg">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
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
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
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
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
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
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
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
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
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
@endsection
