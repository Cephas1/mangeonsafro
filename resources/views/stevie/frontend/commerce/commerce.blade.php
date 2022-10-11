@extends('stevie.layouts.app-front')
@section('content')
    <!-- List Shop Begin -->
    <section class="commerce">
        <!-- Add background slide Begin -->
        @include('stevie.layouts.banner-front')
        <!-- Add background slide End -->
        <div class="listShop">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="banniereHeader">
                        <h2>Commerce</h2>
                    </div>
                </div>
                <!-- List Commerce Begin -->
                @foreach ($shops as $shop )
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <a href="{{route('commerce-page', $shop->id)}}">
                        <div class="row air">
                            <div class="col-md-6 col-sm-12">
                                <div class="Air-Picture-Shop">
                                    <img src="{{asset('assets-front/img/shop/business-plan-epicerie.jpg')}}" alt="" class="air-img">
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="Shop-Details">
                                    <div class="Shop-legend">
                                        <span class="title-shop">{{$shop->name}}</span>
                                        <div class="shop-description">
                                            <span class="Shop-legend-detail">{{$shop->description}}</span>
                                        </div>
                                        <div class="shop-contact">
                                            <span class="Shop-legend-detail"><i class="icon_phone"></i> {{$shop->phone}}</span>
                                            <span class="Shop-legend-detail"><i class="icon_mail_alt"></i> {{$shop->email}}</span>
                                            <span class="Shop-legend-detail"><i class="icon_pin_alt"></i> {{$shop->web_site}}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                @endforeach
                <!-- List Commerce End -->
                <!-- Previous or Next Begin -->
                <div class="col-lg-12 text-center">
                    @if ($shopCount>=13)
                        <div class="product__pagination banniereHeader">
                            {{$shops->links('stevie.layouts.paginate')}}
                        </div>
                    @endif
                </div>
                <!-- Previous or Next End -->
            </div>
        </div>
    </section>
    <!-- List Shop End -->
@endsection
