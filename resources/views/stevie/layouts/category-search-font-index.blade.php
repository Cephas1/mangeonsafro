<!-- Hero Section Begin -->
<section class="hero">
    <div class="container">
        <div class="row">
            <div class="col-lg-3">
            </div>
            <div class="col-lg-9">
                <div class="hero__search">
                    <div class="hero__search__form">
                        <form action={{ route('home.search') }} method="GET" role="search">
                            @csrf
                            <input type="text" placeholder="De quoi avez-vous besoin?" name="term">
                            <button type="submit" class="site-btn">RECHERCHE</button>
                        </form>
                    </div>
                    <div class="hero__search__phone">
                        <div class="hero__search__phone__icon">
                            <i class="fa fa-phone"></i>
                        </div>
                        <div class="hero__search__phone__text">
                            <h5>+33 6 95 88 19 19</h5>
                            <span>service 24/7</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="hero__item set-bg" data-setbg="assets-front/img/hero/banner.jpg">
                    <div class="hero__text">
                        <span>L’Afrique et les Caraïbes </span>
                        <h2>en mille et <br/>une saveurs !!!</h2>
                        <!-- <p>Free Pickup and Delivery Available</p> -->
                        {{--<a href="commerce-page.html" class="primary-btn">Acheter Maintenant</a>--}}
                    </div>
                </div>
            </div>
            <!--<div class="col-lg-12 com-m">
                <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Tous</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">Restaurants</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Fait maison</a>
                    </li>
                  </ul>
            </div>-->
        </div>
    </div>
</section>
<!-- Hero Section End -->
