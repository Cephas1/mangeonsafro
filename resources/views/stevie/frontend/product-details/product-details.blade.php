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
                                            <h3>{{ $product->name }}</h3>
                                            {{--@if( $votes/$votes == 1 )--}}
                                                <div class="product__details__rating">
                                                @for ($i = 0; $i < round($votes); $i+=1)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                                </div>
                                            {{--@elseif( $votes/$votes > 1 )
                                                <div class="product__details__rating">
                                                @for ($i = 0; $i < $votes; $i++)
                                                    <i class="fa fa-star"></i>
                                                @endfor
                                                <i class="fa fa-star-half-o"></i>
                                                </div>
                                            @endif--}}
                                            <!--<div class="product__details__rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star-half-o"></i>
                                            </div>-->
                                            <div class="product__details__price">{{number_format($product->price,2)}} €</div>
                                            <p>{{$product->description}}</p>
                                            <div>
                                                @if (session('message'))
                                                    {{session('message')}}
                                                @endif
                                            </div>
                                            <form action="{{route('add-to-cart')}}" method="POST">
                                                @csrf
                                                <div class="product__details__quantity">
                                                    <input type="text" class="d-none" name="product_id" value="{{$product->id}}">
                                                    <input type="text" class="d-none" name="price" value="{{$product->price}}">
                                                    <input type="text" class="d-none" name="shop_id" value="{{$product->shop_id}}">
                                                    <div class="quantity">
                                                        <div class="pro-qty">
                                                            <input type="text" value="1" name="quantity">
                                                        </div>
                                                    </div>
                                                </div>
                                                <button class="btn primary-btn">Ajouter à la carte</button>
                                                <a href="{{route('isfavoris',$product->id)}}" class="heart-icon"><span class="icon_heart_alt"></span></a>
                                            </form>
                                            {{-- <a href="#" class="primary-btn">Ajouter à la carte</a> --}}

                                            <ul>
                                                <li><b>Disponibilité</b> <span>
                                                    @if ($product->active==1)
                                                        En Stock
                                                    @else
                                                        Rupture de stock
                                                    @endif
                                                    </span></li>
                                                <li><b>Expédition</b><span>01 jour d'expédition.<samp>Retrait gratuit aujourd'hui</samp></span></li>
                                                {{-- <li><b>Poids</b> <span>0.5 kg</span></li> --}}
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
                                </div>
                            </div>
                            {{-- <div class="container com-d com-k">
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
                                            <div class="product__item__pic set-bg" data-setbg="{{asset('assets-front/img/product/product-1.jpg')}}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6><a href="{{route('product-details',1)}}">Viande Fraiche</a></h6>
                                                <h5>30.00€</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="{{asset('assets-front/img/product/product-2.jpg')}}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6><a href="{{route('product-details',1)}}">Bananes</a></h6>
                                                <h5>30.00€</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="{{asset('assets-front/img/product/product-3.jpg')}}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6><a href="{{route('product-details',1)}}">Fruits</a></h6>
                                                <h5>30.00€</h5>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-3 col-md-4 col-sm-6">
                                        <div class="product__item">
                                            <div class="product__item__pic set-bg" data-setbg="{{asset('assets-front/img/product/product-7.jpg')}}">
                                                <ul class="product__item__pic__hover">
                                                    <li><a href="#"><i class="fa fa-heart"></i></a></li>
                                                    <li><a href="#" data-toggle="modal" data-target="#evalModal"><i class="fa fa-star-o"></i></a></li>
                                                    <li><a href="#"><i class="fa fa-shopping-cart"></i></a></li>
                                                </ul>
                                            </div>
                                            <div class="product__item__text">
                                                <h6><a href="{{route('product-details',1)}}">Pastèque</a></h6>
                                                <h5>30.00€</h5>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- <!-- Modal evaluation -->
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
        <!-- Modal evaluation --> --}}
    </section>
    <!-- Product Details Section End -->
@endsection
