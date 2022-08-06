@extends('stevie.layouts.app-front')
@section('content')
    <!-- Contact Section Begin -->
    <section class="commerce">
        <!-- Add background slide Begin -->
        @include('stevie.layouts.banner-front')
        <!-- Add background slide End -->
        <div>
            <div class="contact listShop">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-12 text-center com-j">
                            <div class="banniereHeader">
                                <h2>Contactez-nous</h2>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                            <div class="contact__widget com-d">
                                <span class="icon_phone"></span>
                                <h4>Téléphone</h4>
                                <p>+33 6 95 88 19 19</p>
                            </div>
                        </div>
                        <!-- <div class="col-lg-3 col-md-3 col-sm-6 text-center">
                            <div class="contact__widget com-d">
                                <span class="icon_pin_alt"></span>
                                <h4>Adresse</h4>
                                <p>.................</p>
                            </div>
                        </div> -->
                        <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                            <div class="contact__widget com-d">
                                <span class="icon_clock_alt"></span>
                                <h4>Temps ouvert</h4>
                                <p>24h/7</p>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-4 col-sm-6 text-center">
                            <div class="contact__widget com-d">
                                <span class="icon_mail_alt"></span>
                                <h4>Email</h4>
                                <p>contact@mangeonsafro.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Contact Form Begin -->
            <div class="contact-form listShop">
            <div class="container com-d">
                <div class="contact__form__title com-j">
                    <h2>Laisser un message</h2>
                </div>
                <form action="#" >
                    <div class="row">
                        <div class="col-lg-4 col-md-4">
                            <input class="form-control" type="text" placeholder="Votre nom (obligatoire)">
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input class="form-control" type="email" placeholder="Votre adresse de messagerie (obligatoire)">
                        </div>
                        <div class="col-lg-4 col-md-4">
                            <input class="form-control" type="text" placeholder="Objet">
                        </div>
                        <div class="col-lg-12 text-center">
                            <textarea class="form-control" placeholder="Votre message"></textarea>
                            <button type="submit" class="site-btn">Envoyer</button>
                        </div>
                    </div>
                </form>
            </div>
            </div>
            <!-- Contact Form End -->
        </div>
    </section>
    <!-- Contact Section End -->
@endsection
