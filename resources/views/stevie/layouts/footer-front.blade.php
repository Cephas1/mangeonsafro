<!-- Footer Section Begin -->
<footer class="footer spad">
    <div class="container">
        <div class="row">
            <div class="col-lg-2 col-md-6 col-sm-6">
                <div class="footer__about">
                    <div class="footer__about__logo">
                        <a href="{{route('home')}}"><img src="{{asset('assets-front/img/logo.png')}}" style="height: 30px; width: 30px" alt=""></a>
                    </div>
                    <ul>
                        <!-- <li>Address: 60-49 Road 11378 New York</li> -->
                        <li>+33 6 95 88 19 19</li>
                        <li>contact@mangeonsafro.com</li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6 col-md-6 col-sm-6 offset-lg-1">
                <div class="footer__widget">
                    <h6>Mentions légales</h6>
                    <ul>
                        <li><a href="{{route('conditions-generales-utilisation')}}">Conditions Générales d'utilisation</a></li>
                        <li><a href="{{route('conditions-generales-de-vente')}}">Conditions Générales de vente</a></li>
                        <li><a href="{{route('politique-de-confidentialite')}}">Politique de confidentialité et de cookies</a></li>

                    </ul>
                    <ul>
                        <li><a href="{{route('comment-ca-marche')}}">Comment ça marche ?</a></li>
                        <li><a href="{{route('faq')}}">F.A.Q</a></li>

                    </ul>
                    <div class="footer__widget__social">
                        <a href="#"><i class="fa fa-facebook"></i></a>
                        <a href="#"><i class="fa fa-instagram"></i></a>
                        <a href="#"><i class="fa fa-twitter"></i></a>
                        <a href="#"><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-3 col-md-12">
                <div class="footer__widget">
                    <h6>Newsletter</h6>
                    <p>Restez informés sur les nouvelles offres et réductions quotidiennes.</p>
                    <form action="#">
                        <input type="text" placeholder="Entrer votre mail">
                        <button type="submit" class="site-btn">Souscrire</button>
                    </form>
                    <div class="footer__copyright__payment"><img src="{{asset('assets-front/img/payment-item.png')}}" alt=""></div>
                </div>
            </div>
        </div>

    </div>
</footer>
<!-- Footer Section End -->
