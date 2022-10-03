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
                                    <span class="title-shop">{{ $shop->name }}</span>
                                    <div class="shop-description">
                                        <span class="Shop-legend-detail">{{ $shop->description }}</span>
                                    </div>
                                    <div class="shop-contact">
                                        <span class="Shop-legend-detail"><i class="icon_phone"></i>{{ $shop->phone }}</span>
                                        <span class="Shop-legend-detail"><i class="icon_mail_alt"></i>{{ $shop->email }}</span>
                                        <span class="Shop-legend-detail"><i class="icon_pin_alt"></i>{{ $shop->web_site }}</span>
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
                                    <span>Catégories : </span>
                                </div>
                            </div>
                            <div class="col-lg-7 col-md-5">
                                <div class="filter__found com-f">
                                    <h6><span>{{ $shop->categorieshop->name }}</span></h6>
                                </div>
                            </div>
                            <div class="col-lg-3 col-md-4">
                                <div class="filter__found com-f">
                                    <h6><span>{{ $shopCount }}</span> produit(s) trouvé(s)</h6>
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
                        @foreach($shopProducts as $product)


                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
                                <div class="product__item__pic set-bg" data-setbg="{{asset('assets-front/img/product/product-'.random_int(1,7).'.jpg')}}">
                                    <ul class="product__item__pic__hover">
                                        <li><a href="{{route('isfavoris',$product->id)}}"><i class="fa fa-heart"></i></a></li>
                                        <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
                                        <li><a href="{{route('product-details', $product->id)}}"><i class="fa fa-shopping-cart"></i></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="{{route('product-details', $product->id)}}">{{ $product->name }}</a></h6>
                                    <h5>{{ number_format($product->price, 2) }}€</h5>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        {{-- <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        <div class="col-lg-4 col-md-6 col-sm-6">
                            <div class="product__item com-d">
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
                        </div> --}}
                        <!-- Previous or Next Begin -->
                        <div class="col-lg-12 text-center">
                            @if ($shopCount>=13)
                            <div class="product__pagination banniereHeader">
                                {{$shopProducts->links('stevie.layouts.paginate')}}
                            </div>
                            @endif

                        </div>
                        <!-- Previous or Next End -->
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
<!-- Section Commerce page End -->
@endsection
