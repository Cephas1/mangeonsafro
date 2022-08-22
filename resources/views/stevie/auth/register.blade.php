@include('stevie.layouts.app-front-head')
    <div id="preloder">
        <div class="loader"></div>
    </div>
		<!-- Main Wrapper -->
        <section class="commerce" >
            <!-- Add background slide Begin -->
            @include('stevie.layouts.banner-front')
            <!-- Add background slide End -->
            <div class="signupForm">
                <div class="header__logo text-center">
                    <a href="{{route('home')}}"><img src="assets-front/img/logo.png" style="height: 90px; width:90px " alt=""></a>
                </div>
                <div class="signupTitle text-center">
                    <h2>S'inscrire</h2>
                </div>
                <div class="signupDetails">
                    <form action="#">
                        <div class="row">
                            <div class="col-lg-6 col-sm-12 inputBox">
                                <span>Nom</span>
                                <div>
                                    <input type="text" name="" placeholder="Entrez votre nom">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 inputBox">
                                <span>Prénom</span>
                                <div>
                                    <input type="text" name="" placeholder="Entrez votre prénom">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 inputBox">
                                <span>Email</span>
                                <div>
                                    <input type="email" name="" placeholder="Entrez votre mail">
                                </div>
                            </div>
                            <div class="col-lg-6 col-sm-12 inputBox">
                                <span>Password</span>
                                <div class="pwd">
                                    <input type="password" name="" placeholder="Entrez un mot de passe">
                                    <i class="fa fa-2x fa-eye"></i>
                                </div>
                            </div>
                        </div>
                        <div class="condition">
                            <p>En appuyant sur S’inscrire, vous acceptez nos <a href="{{route('conditions-generales-utilisation')}}" target="_blank">Conditions générales</a>, notre <a href="{{route('politique-de-confidentialite')}}" target="_blank">Politique d’utilisation des données</a> et notre Politique d’utilisation des cookies. Vous recevrez peut-être des notifications par texto de notre part et vous pouvez à tout moment vous désabonner.</p>
                        </div>
                        <div class="signup-Validate">
                            <button type="submit" class="site-btn">Souscrire</button>
                        </div>
                        <div class="condition text-center" style="margin-top: 20px; font-size:26px">
                            <p>Vous possedez déjà un compte? <a href="{{route('connexion')}}"> Se connecter</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
		<!-- /Main Wrapper -->

@include('stevie.layouts.app-front-foot')
