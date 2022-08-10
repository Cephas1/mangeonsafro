@include('stevie.layouts.app-front-head')
        <div id="preloder">
            <div class="loader"></div>
        </div>
		<!-- Main Wrapper -->
        <section class="commerce" >
            <!-- Add background slide Begin -->
            @include('stevie.layouts.banner-front')
            <!-- Add background slide End -->
            <div class="loginForm">
                <div class="header__logo text-center">
                    <a href="{{route('home')}}"><img src="assets-front/img/logo.png" style="height: 90px; width:90px " alt=""></a>
                </div>
                <div class="signupTitle text-center">
                    <h2>Connexion</h2>
                </div>
                <div class="signupDetails">
                    <form action="#">
                        @csrf
                        <div class="row">
                            <div class="col-lg-12 inputBox">
                                <span>Email</span>
                                <div>
                                    <input type="email" name="email" id="email" placeholder="Entrez votre mail" required autofocus>
                                </div>
                            </div>
                            <div class="col-lg-12 inputBox">
                                <span>Password</span>
                                <div class="pwd">
                                    <input type="password" name="password" id="password" placeholder="Entrez un mot de passe" required>
                                    <i class="fa fa-2x fa-eye"></i>
                                </div>
                                <div class="condition text-right">
                                    <p><a href="#">Mot de passe oublié?</a></p>
                                </div>
                            </div>
                        </div>

                        <div class="signup-Validate">
                            <button type="submit" class="site-btn">Se connecter</button>
                        </div>
                        <div class="condition text-center" style="margin-top: 20px; margin-bottom: 20px; font-size:26px">
                            <p>Pas encore inscrit?<a href="{{route('inscription')}}">S'inscrire</a></p>
                        </div>
                    </form>
                </div>
            </div>
        </section>
		<!-- /Main Wrapper -->

@include('stevie.layouts.app-front-foot')
