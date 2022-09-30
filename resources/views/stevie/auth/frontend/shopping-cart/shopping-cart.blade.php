@extends('stevie.layouts.app-front')
@section('content')
    <!-- Shopping-cart Section Begin -->
    <section class="commerce">
        <!-- Add background slide Begin -->
        @include('stevie.layouts.banner-front')
        <!-- Add background slide End -->
        <div class="product-details listShop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banniereHeader">
                            <h2>Panier <span class="fa fa-shopping-cart"></span></h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab com-d">
                            <div class="container">
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="shoping__cart__table">
                                            <table>
                                                <thead>
                                                    <tr>
                                                        <th class="shoping__product">Produits</th>
                                                        <th>Prix</th>
                                                        <th>Quantité</th>
                                                        <th>Total</th>
                                                        <th></th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td class="shoping__cart__item">
                                                            <img src="{{asset('assets-front/img/cart/cart-1.jpg')}}" alt="">
                                                            <h5>Paquet de légumes</h5>
                                                        </td>
                                                        <td class="shoping__cart__price">
                                                            €55.00
                                                        </td>
                                                        <td class="shoping__cart__quantity">
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <input type="text" value="1">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="shoping__cart__total">
                                                            €110.00
                                                        </td>
                                                        <td class="shoping__cart__item__close">
                                                            <span class="icon_close"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="shoping__cart__item">
                                                            <img src="{{asset('assets-front/img/cart/cart-2.jpg')}}" alt="">
                                                            <h5>Légumes frais du jardin</h5>
                                                        </td>
                                                        <td class="shoping__cart__price">
                                                            €39.00
                                                        </td>
                                                        <td class="shoping__cart__quantity">
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <input type="text" value="1">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="shoping__cart__total">
                                                            €39.99
                                                        </td>
                                                        <td class="shoping__cart__item__close">
                                                            <span class="icon_close"></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td class="shoping__cart__item">
                                                            <img src="{{asset('assets-front/img/cart/cart-3.jpg')}}" alt="">
                                                            <h5>Bananes bio</h5>
                                                        </td>
                                                        <td class="shoping__cart__price">
                                                            €69.00
                                                        </td>
                                                        <td class="shoping__cart__quantity">
                                                            <div class="quantity">
                                                                <div class="pro-qty">
                                                                    <input type="text" value="1">
                                                                </div>
                                                            </div>
                                                        </td>
                                                        <td class="shoping__cart__total">
                                                            €69.99
                                                        </td>
                                                        <td class="shoping__cart__item__close">
                                                            <span class="icon_close"></span>
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="shoping__cart__btns">
                                            <a href="#" class="primary-btn cart-btn">CONTINUER VOS ACHATS</a>
                                            <a href="#" class="primary-btn cart-btn cart-btn-right"><span class="icon_loading"></span>
                                               Mis à jour de la carte</a>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="shoping__continue">
                                            <div class="shoping__discount">
                                                <h5>Codes de reduction</h5>
                                                <form action="#">
                                                    <input type="text" placeholder="Entrer votre code coupon">
                                                    <button type="submit" class="site-btn">RECHERCHE</button>
                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="shoping__checkout">
                                            <h5>Total de la carte</h5>
                                            <ul>
                                                <li>P.U<span>€454.98</span></li>
                                                <li>Total <span>€454.98</span></li>
                                            </ul>
                                            <a href="#" class="primary-btn">PROCEDER</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shopping-cart Section End -->
@endsection
