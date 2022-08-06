@extends('stevie.layouts.app-front')
@section('content')
    <!-- Checkout Section Begin -->
    <section class="commerce">
        <!-- Add background slide Begin -->
        @include('stevie.layouts.banner-front')
        <!-- Add background slide End -->
        <div class="checkout listShop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banniereHeader">
                            <h2>Verification</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <h6><span class="icon_tag_alt"></span>Avez-vous un coupon? <a href="#">Cliquez ici</a> pour entrer votre code
                        </h6>
                    </div>
                </div>
                <div class="checkout__form com-d">
                    <h4>Détails de la facturation</h4>
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-8 col-md-6">
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Prénom(s)<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Nom de Famille<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <!-- <div class="checkout__input">
                                    <p>Pays<span>*</span></p>
                                    <input type="text">
                                </div> -->
                                <div class="checkout__input">
                                    <p>Adresse<span>*</span></p>
                                    <!-- <input type="text" placeholder="code postal" class="checkout__input__add"> -->
                                    <input type="text" placeholder="N° de Rue, avenue">
                                </div>
                                <div class="checkout__input">
                                    <p>Ville/Cité<span>*</span></p>
                                    <input type="text">
                                </div>
                                <div class="checkout__input">
                                    <p>Pays/Etat<span>*</span></p>
                                    <input type="text">
                                </div>
                                <div class="checkout__input">
                                    <p>Code Postal<span>*</span></p>
                                    <input type="text">
                                </div>
                                <div class="row">
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Téléphone<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                    <div class="col-lg-6">
                                        <div class="checkout__input">
                                            <p>Email<span>*</span></p>
                                            <input type="text">
                                        </div>
                                    </div>
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="acc">
                                        Creer un compte?
                                        <input type="checkbox" id="acc">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <p>Créez un compte en saisissant les informations ci-dessus. Si vous êtes un client de retour, veuillez vous connecter en haut de la page</p>
                                <div class="checkout__input">
                                    <p>Mot de Passe du compte<span>*</span></p>
                                    <input type="text">
                                </div>
                                <div class="checkout__input__checkbox">
                                    <label for="diff-acc">
                                        Livrer à une adresse différente?
                                        <input type="checkbox" id="diff-acc">
                                        <span class="checkmark"></span>
                                    </label>
                                </div>
                                <div class="checkout__input">
                                    <p>Notes d'ordre<span>*</span></p>
                                    <input type="text"
                                        placeholder="Remarques concernant votre commande, par ex. notes spéciales pour la livraison.">
                                </div>
                            </div>
                            <div class="col-lg-4 col-md-6">
                                <div class="checkout__order">
                                    <h4>Votre Commande</h4>
                                    <div class="checkout__order__products">Produits <span>Total</span></div>
                                    <ul>
                                        <li>Paquet de légumes <span>€75.99</span></li>
                                        <li>légumes frais<span>€151.99</span></li>
                                        <li>Bananes Bio<span>€53.99</span></li>
                                    </ul>
                                    <!-- <div class="checkout__order__subtotal">Subtotal <span>€750.99</span></div> -->
                                    <div class="checkout__order__total">Total <span>€750.99</span></div>
                                    <div class="checkout__input__checkbox">
                                        <label for="acc-or">
                                            Créer un compte?
                                            <input type="checkbox" id="acc-or">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <p>Lorem ipsum dolor sit amet, consectetur adip elit, sed do eiusmod tempor incididunt
                                        ut labore et dolore magna aliqua.</p>
                                    <div class="checkout__input__checkbox">
                                        <label for="payment">
                                            Paiement par chèque
                                            <input type="checkbox" id="payment">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <div class="checkout__input__checkbox">
                                        <label for="paypal">
                                            Paypal
                                            <input type="checkbox" id="paypal">
                                            <span class="checkmark"></span>
                                        </label>
                                    </div>
                                    <button type="submit" class="site-btn">Passer la commande</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <!-- Checkout Section End -->
@endsection
