@extends('layouts.app-front')

@section('content')
@include('layouts.category-search-back')
                </div>
            </div>
        </div>
    </section>
    <!-- Hero Section End -->

    <!-- Breadcrumb Section Begin -->
    <section class="breadcrumb-section set-bg" data-setbg="assets-front/img/breadcrumb.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <div class="breadcrumb__text">
                        <h2>Conditions Générales d’Utilisation</h2>
                        <div class="breadcrumb__option">
                            <a href="/">Accueil</a>
                            <span>Conditions Générales d’Utilisation</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Breadcrumb Section End -->

    <!-- Product Details Section Begin -->
    <section class="product-details spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                    aria-selected="true"> OBJET</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-2" role="tab"
                                    aria-selected="false">MENTIONS LEGALES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-3" role="tab"
                                    aria-selected="false">DEFINITIONS</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Condition01</h6> -->
                                    <p>Les présentes Conditions Générales d’Utilisation (ci-après CGU) ont pour objet d’encadrer juridiquement les modalités de mise à disposition, d’accès et d’utilisation des services du site internet « www.mangeonsafro.com » (ci-après « le site ») et les applications mobiles et tablettes associées (ci-après « les applications »).

                                        Elles forment avec la Politique de Confidentialité, le contrat entre MangeonsAfro et tout utilisateur.

                                        Tout accès au site, à ses services ou aux applications associées, implique l’acceptation sans aucune réserve, ni restriction, des présentes CGU.

                                        L’Utilisateur accepte que tout accord entre MangeonsAfro et lui soit conservé pour une période légale de 5 ans.

                                        MangeonsAfro se réserve le droit de modifier en partie ou dans sa totalité et à tout moment, le contenu des présentes CGU. A chaque connexion, l’Utilisateur est réputé accepter la version en vigueur.

                                        L’Utilisateur accepte de recevoir des SMS et emails concernant les commandes qu’il passera sur la plateforme afin de lui envoyer toutes notifications essentielles.

                                        En cas de non-acceptation des présentes CGU, en partie ou en totalité, vous devez renoncer à utiliser les services proposés par le site et les applications associées</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-2" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Condition02</h6> -->
                                    <p>Le site www.mangeonsafro.com  et les applications mobiles et tablettes associées (MangeonsAfro) sont édités par la société :
                                        <ul style="list-style: none;">
                                            <li>FHET CONSULTING</li>
                                            <li>SASU au capital de 1 000 €</li>
                                            <li>Siège social : 1, rue René Cassin, 94270 Le Kremlin-Bicêtre, France</li>
                                            <li>Immatriculée au RCS de CRETEIL sous le numéro 843 654 682</li>
                                            <li>N° TVA intracommunautaire : FR94843654682</li>
                                            <li> Directrice de la publication : Françoise NGANDO BEBE</li>
                                            <li>Tél : + 33 6 95 88 19 19</li>
                                            <li>Adresse email : contact@mangeonsafro.com</li>
                                        </ul>
                                        Le site www.mangeonsafro.com est hébergé par :
                                        <ul style="list-style: none;">
                                            <li>PLANETHOSTER inc.,</li>
                                            <li>4416 Louis B. Mayer,</li>
                                            <li>Laval (Québec) H7P 0G1,</li>
                                            <li>Canada</li>
                                            <li>FR (Nº Vert): 0 805 080 426</li>
                                            <li>FR: +33 1 76 60 41 43</li>
                                        </ul>
                                        Le stockage des données s’effectue exclusivement dans des centres de données situés en France..</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-3" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Condition03</h6> -->
                                    <p>La présente clause a pour objet de définir les différents termes essentiels du contrat :
                                        <ul>
                                            <li>La Plateforme MangeonsAfro (ci-après « la plateforme ») : désigne le site web accessible via l’adresse  » https://www.mangeonsafro.com » et les applications mobiles et tablettes associées.</li>
                                            <li> « Utilisateur »: désigne toute personne physique âgée de 18 ans ou plus, capable de souscrire des contrats, qui utilise la plateforme ou ses services indépendamment du lieu où elle se trouve et les modalités de sa connexion.</li>
                                            <li>« Membre » : désigne tout utilisateur, titulaire d’un compte sur la plateforme.</li>
                                            <li>« Client » : désigne tout membre, ayant déjà passé au moins une commande sur la plateforme.</li>
                                            <li>« Conditions d’Utilisation» : désigne l’ensemble des présentes Conditions Générales et particulières d’Utilisation.</li>
                                            <li>« Restaurant» : désigne un établissement commercial où l’on sert des repas contre paiement.</li>
                                            <li>« Traiteur » désigne un professionnel qui prépare des repas sur commande d’un particulier ou des plats à emporter.</li>
                                            <li>« Faits maison» désigne un professionnel de la cuisine qui prépare des plats fait maison à emporter et à consommer chez soi ou dans tout autre lieu</li>
                                            <li>«Epicerie » désigne un commerce, une boutique, un magasin d’alimentation où l’on vend des produits de consommation courante qui peuvent être conservés</li>
                                            <li>«Boutique » ou « Commerce » désigne tout établissement commercial ou tout professionnel commercialisant ses produits via la plateforme.</li>
                                            <li>« Contenu boutique ou commerce » : désigne l’ensemble des informations relatives à un commerce, fournies par le commerçant à MangeonsAfro ou que le commerçant a autorisé MangeonsAfro à télécharger sur la plateforme, notamment les informations sur le commerce et sur les produits commercialisés (désignations, descriptifs, illustrations, prix).</li>
                                            <li>« Contenu Utilisateur» : désigne l’ensemble des informations transmises par un utilisateur sur la plateforme, notamment ses informations de compte, son état-civil, ses commandes, avis et commentaires publiés.</li>
                                            <li>« Produit » désigne tout produit commercialisé via la plateforme MangeonsAfro.</li>
                                        </ul>
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-04" role="tab"
                                        aria-selected="true">SERVICES ET PRESTATIONS OFFERTS</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-05" role="tab"
                                        aria-selected="false">INFORMATIONS SUR LES PRODUITS PRESENTES</a>
                                </li>
                                <!-- <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#tabs-06" role="tab"
                                        aria-selected="false">Article 06</a>
                                </li> -->
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-04" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <!-- <h6>Condition 04</h6> -->
                                        <p>
                                            MangeonsAfro permet à l’utilisateur, un accès gratuit aux services de recherche, consultation, commande en ligne de produits alimentaires proposés par les commerces inscrits sur la plateforme (Restaurants, Traiteurs, Faits Maison, Epiceries) :
                                            <ul>
                                                <li>Plats, repas cuisinés, menus</li>
                                                <li>Produits alimentaires frais, secs, surgelés…</li>
                                            </ul>

                                            A travers sa plateforme, MangeonsAfro se contente de présenter des produits proposés par les commerces inscrits et de recueillir les commandes de clients pour le compte de ces commerces.

                                            A ce titre, MangeonsAfro agit exclusivement comme un intermédiaire dans le cadre de la commande des produits proposés par ces commerces aux Utilisateurs.

                                            MangeonsAfro encaisse le montant des commandes de produits pour le compte des commerçants et à ce titre n’agit qu’en tant que mandataire du commerce pour le paiement.
                                        </p>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tabs-05" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <!-- <h6>Condition 05</h6> -->
                                        <p>
                                            MangeonsAfro se contente de présenter les produits proposés par les commerces inscrits sur la plateforme et de recueillir les commandes des clients pour le compte de ces commerces.

                                            MangeonsAfro n’est pas responsable des produits commercialisés, ni du respect des obligations contractuelles et légales du commerce envers les clients notamment concernant ses produits, leur qualité, les ingrédients, allergènes sauf dans le cas ou MangeonsAfro est lui-même mentionné comme fabricant ou vendeur d’un produit sur la plateforme

                                            L’utilisateur peut consulter la description et la constitution des Produits sur la plateforme. Il est possible que la description ne soit pas à jour. MangeonsAfro ne peut être tenu responsable de ces écarts d’informations. La responsabilité de mise à jour des informations de produits et de s’assurer qu’elles sont exactes revient à chaque commerce. MangeonsAfro n’est pas non plus responsable du contenu des informations relatives aux produits.

                                            Avant toute commande, en cas de doute sur la description, les ingrédients, les allergènes ou toute autre information d’un produit, le client doit se renseigner directement auprès du commerce via les coordonnées figurant sur la plateforme.
                                        </p>
                                    </div>
                                </div>
                                <!-- <div class="tab-pane" id="tabs-06" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <h6>Condition 06</h6>
                                        <p>Vestibulum ac diam sit amet quam vehicula elementum sed sit amet dui.
                                            Pellentesque in ipsum id orci porta dapibus. Proin eget tortor risus.
                                            Vivamus suscipit tortor eget felis porttitor volutpat. Vestibulum ac diam
                                            sit amet quam vehicula elementum sed sit amet dui. Donec rutrum congue leo
                                            eget malesuada. Vivamus suscipit tortor eget felis porttitor volutpat.
                                            Curabitur arcu erat, accumsan id imperdiet et, porttitor at sem. Praesent
                                            sapien massa, convallis a pellentesque nec, egestas non nisi. Vestibulum ac
                                            diam sit amet quam vehicula elementum sed sit amet dui. Vestibulum ante
                                            ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae;
                                            Donec velit neque, auctor sit amet aliquam vel, ullamcorper sit amet ligula.
                                            Proin eget tortor risus.</p>
                                    </div>
                                </div> -->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="product__details__tab">
                            <ul class="nav nav-tabs" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tabs-07" role="tab"
                                        aria-selected="true">CONDITIONS D’ACCES ET UTILISATION</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-07" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <!-- <h6>Condition 07</h6> -->
                                        <p>
                                            a plateforme est accessible gratuitement 24heures sur 24, 7 jours sur 7, en tout lieu à tout utilisateur ayant un accès à internet. Les frais nécessaires à l’utilisateur pour accéder aux services proposés par la plateforme sont à sa charge (connexion Internet, matériel informatique, logiciels divers, etc.). L’Utilisateur doit s’assurer que toutes les personnes qui accèdent au Site via sa connexion Internet sont informées des présentes CGU et ont accepté de s’y conformer.

                                            Les services de commandes en ligne, notations des produits, des commerces et publication des avis sont exclusivement réservés aux membres ou clients de la plateforme. Pour devenir membre ou client de la plateforme, l’Utilisateur doit s’inscrire via le formulaire d’inscription et créer un compte. <br>

                                           <b>Conditions d’inscription </b><br>
                                            L’Utilisateur doit être âgé de 18 ans et plus et disposer de la capacité juridique requise pour se soumettre à des obligations juridiques contraignantes.

                                            En acceptant de s’inscrire, l’Utilisateur s’engage à fournir les informations sincères et exactes sur son état civil notamment sa civilité, son nom, son ou ses prénoms, sa date de naissance, et ses adresses notamment son adresse email, son numéro de téléphone mobile.

                                            Lors de son inscription, l’utilisateur choisit un identifiant (son adresse email) et un mot de passe (ci-après « les identifiants ») qui lui permettent de se connecter à la plateforme pour accéder aux services réservés et aux informations de son compte. <br>

                                             <b>Confidentialité des identifiants de compte</b> <br>
                                            Les Identifiants sont personnels, confidentiels et ne doivent pas être communiqués à un tiers. Ils ne peuvent être changés que par l’Utilisateur ou en cas d’extrême nécessité par l’équipe MangeonsAfro.

                                            L’Utilisateur est seul responsable de l’utilisation de son compte et/ou de ses Identifiants et s’engage à tout mettre en œuvre pour les conserver secret.

                                            En cas de perte ou de vol des Identifiants le concernant, l’Utilisateur est responsable de toute conséquence dommageable de cette perte ou ce vol, et doit utiliser, dans les plus brefs délais, la procédure lui permettant de les modifier, qui peut être consultée sur la page accessible à l’adresse https://www.mangeonsafro.com/mon-compte/

                                             <br><b>Recherche, consultation, sélection de produits dans la plateforme</b><br>
                                            L’utilisateur peut effectuer la recherche et la consultation de produits sans avoir à se connecter à son compte. Mais au moment de valider sa commande, il faudra obligatoirement se connecter ou créer un compte s’il est un nouveau membre.

                                            Lorsque l’utilisateur arrive sur le site, il sélectionne la catégorie de commerce dans laquelle il souhaite effectuer sa recherche et commander les produits : Restaurant, Traiteur, Faits Maison ou Epiceries.

                                            Selon l’adresse renseignée ou sa géolocalisation (s’il l’a autorisée), la plateforme lui affiche une liste de commerces autour de son emplacement dans l’ordre des distances par rapport à sa localisation en commençant par le plus proche.

                                            L’utilisateur peut alors consulter les produits proposés par les commerces affichés. Chaque produit sélectionné est rajouté dans le panier de l’utilisateur ; à noter que pour une même commande, on ne peut sélectionner que les produits d’une seule et même boutique. Si vous sélectionnez les produits d’une autre boutique, la précédente sélection est annulée.

                                            Lorsque la sélection est terminée, l’utilisateur consulte son panier qui lui affiche le récapitulatif des produits sélectionnés ainsi que le montant à payer pour la commande.

                                            A cette étape, l’utilisateur doit vérifier sa commande et s’assurer qu’il n’y a pas d’erreur dans celle-ci. En l’absence d’erreur, il peut alors valider sa commande via le bouton « commander » ; il est ensuite dirigé vers la page de paiement.

                                             <br><b>Droit de modification et d’annulation</b><br>
                                            Tant que l’utilisateur n’a pas encore effectué son paiement, il peut modifier ou annuler sa commande à tout moment sans aucune conséquence.

                                            Une fois le paiement effectué, la commande ne peut plus être annulée et l’utilisateur ne peut pas prétendre à un remboursement sauf s’il s’agit d’une erreur qui ne peut pas lui être imputée ou si le commerçant n’a pas pu au final honorer la commande.

                                            Dans ce cas, MangeonsAfro traite la demande d’annulation et de remboursement dans les brefs délais.

                                            <br><b>Suspension de compte</b><br>
                                            En cas de non-respect des présentes conditions d’utilisation, MangeonsAfro pourra être amené à suspendre voire à supprimer le compte de l’Utilisateur. Une fois le compte suspendu, l’Utilisateur ne pourra plus y accéder, ni bénéficier des services réservés du site. Ses commandes en cours seront annulées/traitées jusqu’au bout ? et ses points de fidélité éventuellement cumulés seront supprimés (fonctionnement à confirmer).

                                            <br><b>Désinscription</b><br>
                                            Tout utilisateur membre régulièrement inscrit pourra demander sa désinscription en envoyant une demande de désinscription par email à l’adresse desinscription@mangeonsafro.com.

                                            Celle-ci sera traitée par MangeonsAfro dans un délai raisonnable.

                                            Une fois sa désinscription effective, l’Utilisateur ne pourra plus accéder à son compte, ni bénéficier des services réservés du site. Ses commandes en cours seront annulées/traitées jusqu’au bout ? et ses points de fidélité éventuellement cumulés seront supprimés (fonctionnement à confirmer).
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-10" role="tab"
                                    aria-selected="true">PROPRIETE INTELLECTUELLE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-11" role="tab"
                                    aria-selected="false">DONNEES PERSONNELLES</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-10" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Condition 10</h6> -->
                                    <p>Les marques, logos, signes ainsi que tous les contenus de la plateforme (textes, images, sons, graphismes, icônes, logiciels…) font l’objet d’une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d’auteur.

                                        La marque et le logo « MangeonsAfro » sont des marques déposées de FHET CONSULTING (Numéro de dépôt INPI : 4674907). Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de cette marque, de quelque nature que ce soit est totalement prohibée.

                                        Toute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, par quelque procédé que ce soit, sans l’autorisation expresse écrite de FHET Consulting constituerait une contrefaçon et serait poursuivie conformément aux dispositions des articles L 335-2 et suivants du Code de la propriété intellectuelle.</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-11" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Condition 11</h6> -->
                                    <p>
                                        Le site se réserve le droit d’utiliser les informations demandées à l’inscription pour gestion, animation du service ou administration, plus particulièrement l’adresse email et le numéro de téléphone de l’utilisateur. Ces informations sont également nécessaires et obligatoires pour la création du compte de l’utilisateur.

                                            Le site collecte et traite les informations personnelles dans le respect de la vie privée conformément à la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés.

                                            L’utilisateur dispose d’un droit d’accès, de modification, de suppression et d’opposition de ses données personnelles conformément aux articles 39 et 40 de la loi en date du 6 janvier 1978.

                                            L’utilisateur exerce ce droit via son espace personnel, le formulaire de contact, par email à rgpd@mangeonsafro.com ou par voie postale à :
                                            <ul>
                                                <li>FHET CONSULTING</li>
                                                <li>c/o MangeonsAfro</li>
                                                <li>1, Rue René Cassin</li>
                                                <li>94270 Le Kremlin Bicêtre</li>
                                                <li>France</li>
                                            </ul>
                                        </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-13" role="tab"
                                    aria-selected="true">RESPONSABILITE ET FORCE MAJEURE</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-13" role="tabpanel">
                                <div class="product__details__tab__desc">
                                  <p>
                                    Les informations diffusées sur MangeonAfro sont réputées fiables, toutefois, MangeonsAfro ne garantit pas qu’elles soient exemptes de défauts, d’erreurs ou d’omissions. <br>
                                    Malgré des mises à jour régulières, MangeonsAfro ne peut être tenu responsable de : <br>
                                    <ul style="margin-left: 100px; font-size:14px">
                                        <li>la modification des dispositions administratives et juridiques survenant après la publication.</li>
                                        <li>l’utilisation et de l’interprétation de l’information qui est contenu dans la plateforme.</li>
                                        <li>d’éventuels virus qui pourraient infecter l’ordinateur ou tout matériel informatique de l’internaute, suite à une utilisation, à l’accès, ou au téléchargement provenant de ce site.</li>
                                        <li>en cas de force majeure ou du fait imprévisible et insurmontable d’un tiers.</li>
                                        <li>pertes résultant de ou en relation avec des problèmes dont un commerce est responsable</li>
                                        <li>des fautes de tiers ou de l’interruption de l’accessibilité de la plateforme non imputable à MangeonsAfro</li>
                                        <li>des commandes passées par les utilisateurs en utilisant des données de paiement ou autres données contractuelles obtenues frauduleusement ;</li>
                                        <li>contenu des sites vers lesquels la plateforme propose des liens, y compris l’exactitude des sites liés et la protection des données sur ces sites.</li>
                                        <li>d’un manquement ou d’une non-conformité à ses services si ce manquement est causé par des circonstances indépendantes de sa volonté. De telles circonstances peuvent être, sans toutefois s’y limiter, des perturbations dans le fonctionnement de MangeonsAfro et/ou du magasin en raison de législation, d’acte d’état ou d’autorités publiques, d’actes de guerre, de terrorisme, de grèves, de blocus physiques, de lock-out et catastrophes naturelles.</li>
                                    </ul>
                                    Le commerçant aura l’entière responsabilité de l’utilisation qu’il fera du contenu du site ou des informations. Toute utilisation du service par l’utilisateur portant atteinte ou causant des dommages au site fera l’objet d’une indemnisation au profit du site.br
                                    Tout événement ayant pour conséquence un dysfonctionnement du serveur ou du réseau n’engage en rien la responsabilité de MangeonsAfro <br>

                                    L’accès aux services du site peut à tout moment faire l’objet d’une modification, d’une suspension ou d’une interruption sans préavis pour maintenance ou tout autre cas nécessitant cette situation. L’utilisateur s’engage à ne réclamer aucune indemnisation suite à la modification, à la suspension ou à l’interruption du présent contrat.br

                                    L’utilisateur a la possibilité de contacter le site par mail à l’adresse suivante : contact@mangeonsafro.com
                                  </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-15" role="tab"
                                    aria-selected="true">LIENS HYPERTEXTES</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-16" role="tab"
                                    aria-selected="false">EVOLUTION DU CONTRAT</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-15" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Condition 10</h6> -->
                                    <p>Des liens hypertextes renvoyant à des sites gérés par des tiers peuvent être présents sur la plateforme MangeonsAfro. L’Utilisateur est informé qu’en cliquant sur ces liens. Il sera redirigé hors de la plateforme.

                                        MangeonsAfro n’a pas de contrôle sur les pages web sur lesquelles aboutissent ces liens et ne saurait en aucun cas, être tenu responsable de leur contenu, ni du respect de la vie privée ou d’autres pratiques de ces sites.

                                        La présence de liens vers ces sites ne saurait constituer une approbation des éléments présents sur ces sites ni une quelconque association avec les gestionnaires de ces sites. Il appartient à l’Utilisateur de faire toutes les vérifications qui lui semblent nécessaires
                                        ou opportunes avant d’utiliser ces sites et/ou de procéder à une quelconque transaction avec l’un d’eux</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-16" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Condition 11</h6> -->
                                    <p>
                                        MangeonsAfro se réserve le droit de modifier dans sa totalité et à tout moment, le contenu des présentes CGU
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-17" role="tab"
                                    aria-selected="true">DUREE</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" data-toggle="tab" href="#tabs-18" role="tab"
                                    aria-selected="false">PUBLICATION PAR L’UTILISATEUR</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-17" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Condition 10</h6> -->
                                    <p>Les présentes conditions générales d’utilisation constituent un contrat dont la durée est indéterminée, ses effets à l’égard de l’utilisateur entrent en compte dès lors que l’utilisateur a recours au service.x</p>
                                </div>
                            </div>
                            <div class="tab-pane" id="tabs-18" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <!-- <h6>Condition 11</h6> -->
                                    <p>
                                        Le site donne le droit aux membres clients de noter les produits commandés, les commerces concernés et de publier des avis et commentaires sur les commandes passées lorsque ceux-ci respectent les règles de la Netiquette et les règles de droit en vigueur.

                                        Dans ses publications, le client s’engage à respecter les règles de bonnes pratiques suivantes :
                                        <ul>
                                            <li> Pour publier un avis, l’Utilisateur doit avoir commandé dans un commerce (restaurants, traiteurs, faits maison, épicerie), par l’intermédiaire de la plateforme.</li>
                                            <li> L’avis doit concerner exclusivement une commande passée et le commerce dans lequel elle a été passée.  Tout avis mentionnant un autre commerce pourra être refusé par MangeonsAfro.</li>
                                            <li> ne pas mettre en ligne de contenus pouvant porter atteinte aux intérêts de tierces personnes</li>
                                        </ul>
                                        <p> MangeonsAfro peut exercer une modération sur les publications et se réserve le droit de refuser leur mise en ligne sans avoir à s’en justifier auprès du membre dans l’un des cas suivants :</p>
                                       <ul>
                                           <li> Ia publication ne respecte pas les conditions énoncées ci-dessus ;</li>
                                           <li>MangeonsAfro estime que sa responsabilité civile ou pénale peut être engagée ;</li>
                                           <li>le contenu ou les éléments relatifs comportent des injures ou grossièretés ;</li>
                                           <li>le contenu est sans rapport avec la commande passée ou le commerce noté ;</li>
                                           <li> le contenu comporte des éléments de conflits d’intérêts ou de fraude ;</li>
                                           <li>le contenu formule un commentaire inapproprié sur un autre Utilisateur ou son auteur ;</li>
                                           <li>le Contenu comporte des informations personnelles ou des éléments susceptibles d’aboutir à un vol d’identité, telles que le nom ou prénom d’individus qui ne sont pas des personnes publiques, un numéro de téléphone, une adresse physique précise ou une adresse email</li>
                                           <li>le Contenu mentionne des sites Internet, liens hypertexte, URL, adresses email ou numéros de téléphone ;</li>
                                           <li>  le Contenu est clairement du spam.</li>
                                       </ul>
                                       Tout Utilisateur identifié comme ayant déposé un avis frauduleux ou estimé comme tel, pourra voir son compte désactivé par MangeonsAfro (ce qui entraine l’annulation des commandes en cours et la suppression des points de fidélité éventuellement cumulés),

                                        Le membre reste titulaire de l’intégralité de ses droits de propriété intellectuelle. Mais en publiant une notation, un avis/commentaire sur le site, il cède à l’éditeur FHET Consulting, le droit non-exclusif et gratuit de représenter, reproduire, adapter, modifier, diffuser et distribuer sa publication, directement ou par un tiers autorisé, dans le monde entier, sur tout support (numérique ou physique), pour la durée de la propriété intellectuelle. Le membre cède notamment le droit d’utiliser sa publication sur internet et sur les réseaux de téléphone mobile.

                                        FHET Consulting s’engage à faire figurer le nom du membre à proximité de chaque utilisation de sa publication.

                                        Tout contenu mis en ligne par l’utilisateur est de sa seule responsabilité. Tout recours en justice engagé par un tiers lésé contre la plateforme sera pris en charge par l’Utilisateur.

                                        Le contenu de l’Utilisateur peut être à tout moment et pour n’importe quelle raison supprimé ou modifié par MangeonsAfro sans préavis.

                                        MangeonsAfro n’offre aucune contrepartie en échange d’une notation ou d’une publication d’avis ou de commentaires.
                                     </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product__details__tab">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" data-toggle="tab" href="#tabs-19" role="tab"
                                    aria-selected="true">DROIT APPLICABLE</a>
                            </li>
                        </ul>
                        <div class="tab-content">
                            <div class="tab-pane active" id="tabs-19" role="tabpanel">
                                <div class="product__details__tab__desc">
                                    <p>La législation française s’applique au présent contrat. En cas d’absence de résolution amiable d’un litige né entre les parties, les tribunaux français seront seuls compétents.
                                        Pour toute question relative à l’application des présentes CGU, vous pouvez joindre la société :
                                        <ul>
                                            <li> FHET CONSULTING</li>
                                            <li> C/O MangeonsAfro</li>
                                            <li> 1, rue René Cassin,</li>
                                            <li> 94270 Le Kremlin-Bicêtre, France</li>
                                            <li> Adresse email : contact@mangeonsafro.com</li>
                                        </ul>
                                      </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Product Details Section End -->

@endsection
