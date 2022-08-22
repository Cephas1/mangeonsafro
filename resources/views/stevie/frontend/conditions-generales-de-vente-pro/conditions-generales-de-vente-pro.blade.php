@extends('stevie.layouts.app-front')
@section('content')
    <!-- Conditions generales de vente pro Section Begin -->
    <section class="commerce">
        <!-- Add background slide Begin -->
        @include('stevie.layouts.banner-front')
        <!-- Add background slide End -->
        <div class="product-details listShop">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 text-center">
                        <div class="banniereHeader">
                            <h2>Conditions Générales de vente Pro</h2>
                        </div>
                    </div>
                    <div class="col-lg-12">
                        <div class="product__details__tab com-d">
                            <div class="tab-content">
                                <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                    <div class="product__details__tab__desc">
                                        <ul class="nav nav-tabs" role="tablist">
                                            <li class="nav-item">
                                                <a class="nav-link active" data-toggle="tab" href="#tabs-1" role="tab"
                                                    aria-selected="true">MENTIONS OBLIGATOIRES</a>
                                            </li>
                                        </ul>
                                        <div class="tab-content">
                                            <div class="tab-pane active" id="tabs-1" role="tabpanel">
                                                <div class="product__details__tab__desc">
                                                    <!-- <h6>Condition01</h6> -->
                                                    <p>Les présentes conditions Générales de Vente s’appliquent à toutes les ventes effectuées aux clients sur la plateforme MangeonsAfro, sous réserve de conditions “Autres” précisées dans les fiches de présentation des produits.

                                                        Le site MangeonsAfro est édité par la société :
                                                        <ul style="list-style: none;">
                                                            <li> FHET CONSULTING</li>
                                                            <li>SASU au capital de 1 000 €</li>
                                                            <li> Siège social : 1, rue René Cassin, 94270 Le Kremlin-Bicêtre, France</li>
                                                            <li>Immatriculée au RCS de CRETEIL sous le numéro 843 654 682</li>
                                                            <li>N° TVA intracommunautaire : FR94843654682</li>
                                                            <li>Directrice de la publication : Françoise NGANDO BEBE</li>
                                                            <li>Tél : + 33 6 95 88 19 19</li>
                                                            <li>Adresse e-mail : contact@mangeonsafro.com</li>
                                                        </ul>
                                                    </p>
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
                                                                    aria-selected="true">PRESTATIONS ET SERVICES OFFERTS</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-04" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        mangeonsafro est une plateforme de mise en relation des commerces de produits alimentaires afro-caribéen (restaurants, traiteurs, faits maison, épiceries) et des utilisateurs, potentiels clients.
                                                                        Elle permet aux commerces ou boutiques inscrits, de :
                                                                        <ul style="margin-left: 100px; ">
                                                                            <li>Présenter leur produits et services aux utilisateurs,</li>
                                                                            <li>Commercialiser leurs produits et services présentés dans la plateforme.</li>
                                                                        </ul><br>
                                                                        mangeonsafro se contente de présenter des produits proposés par les commerces inscrits et de recueillir les commandes de clients pour le compte de ces commerces. A ce titre, mangeonsafro agit exclusivement comme un intermédiaire dans le cadre de la commande des produits proposés par ces commerces aux Utilisateurs.
                                                                        Par ailleurs, mangeonsafro encaisse le montant des commandes de produits pour le compte des commerçants et dans le cas des livraisons payantes, les frais de livraisons pour le compte des livreurs ; à ce titre n’agit qu’en tant que mandataire du commerce et du livreur pour le paiement
                                                                        Tout commerce ou boutique déclare avoir pris connaissance et accepte sans aucune réserve, les présentes CGV avant de s’inscrire et utiliser le site. De ce fait, lorsque le commerce valide son inscription, il accepte par cet acte les CGV. Elle constitue le contrat signé entre mangeonsafro et tout commerce.
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-07" role="tab"
                                                                    aria-selected="true">CONDITIONS D’INSCRIPTION</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-07" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        Tout commerce ou professionnel proposant à la vente des produits alimentaires Afro-caribéens peut demander à s’inscrire sur la plateforme. L’inscription est gratuite ; à cette fin il faut :
                                                                            <ul style="margin-left: 100px;">
                                                                                <li>Envoyer à mangeonsafro une demande d’inscription (liens : inscrire un commerce)</li>
                                                                                <li> Fournir les documents demandés</li>
                                                                            </ul><br>
                                                                        Après étude des éléments fournis et vérifications, mangeonsafro valide la demande et invite le commerce à finaliser son inscription pour créer un compte.

                                                                        Si la demande d’inscription n’est pas validée, mangeonsafro en informe le demandeur.

                                                                        Une fois l’inscription terminée, le commerçant peut enregistrer ses produits qui deviennent dès lors, disponibles à la vente.

                                                                        Les commerces ou professionnels sont classés par catégorie et mangeonsafro distingue quatre catégories de commerces : <br><br>
                                                                            <ul style="margin-left: 100px;">
                                                                                <li>Les restaurants</li>
                                                                                <li>Les Traiteurs</li>
                                                                                <li>Les professionnels du fait maison</li>
                                                                                <li>Les épiceries</li>
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-10" role="tab"
                                                                    aria-selected="true">INFORMATIONS SUR LES PRODUITS PRESENTES</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-10" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        Chaque commerce est responsable des informations décrivant les produits qu’il commercialise. Il est également responsable du respect des obligations contractuelles et légales de ses produits envers les clients mangeonsafro.

                                                                        Chaque commerce s’engage à fournir une description et une constitution détaillées exactes et conformes de ses produits notamment leurs ingrédients et allergènes…

                                                                        Chaque commerce doit toujours s’assurer que la description affichée de ses produits est à jour.

                                                                        Avant toute commande, le client peut directement se renseigner auprès du commerce, en cas de doute sur la description, les ingrédients, les allergènes ou toute autre information sur un produit.<br><br>
                                                                         <b style="margin-left: 100px;">Disponibilité des produits</b> <br><br>

                                                                        Lorsqu’un produit est disponible, la mention “en stock” ou “disponible” doit être indiquée sur la page de vente ou sur la fiche de celui-ci. Si l’un des produits n’est plus disponible au moment de la commande, le commerce doit informer immédiatement la plateforme et afin que les clients soient remboursés si le paiement a été effectué.

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
                                                                    aria-selected="true">TARIFICATIONS</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-15" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        La tarification mangeonsafro, comprend un abonnement mensuel fixe et une commission en pourcentage prélevée sur chaque commande passée sur la plateforme. <br><br>
                                                                         <b style="margin-left: 50px;">Types de tarifications</b> <br><br>
                                                                         Trois types d’abonnements mensuels sont proposés aux commerces, selon leur catégorie, leurs besoins en services et prestations sur la plateforme : <br>
                                                                         Pour les restaurants, traiteurs, épiceries :
                                                                         <ul style="margin-left: 100px; font-size:14px">
                                                                            <li>Tarif Basic</li>
                                                                            <li>Tarification Standard</li>
                                                                            <li>Tarification Gold</li>
                                                                         </ul> <br>
                                                                         Pour les professionnels du fait-maison : <br><br>
                                                                         <ul style="margin-left: 100px; font-size:14px">
                                                                            <li>Tarif Basic</li>
                                                                            <li>Tarification Standard fait-maison</li>
                                                                            <li>Tarification Gold fait-maison</li><br>
                                                                         </ul>
                                                                         La grille ci-dessous décrit les différents types de tarification, ainsi que les prestations associées : <br> <br>
                                                                         <b>Tarification par abonnement </b><br><br>
                                                                         <div class="table-responsive">

                                                                            <!--Table-->
                                                                            <table class="table">

                                                                              <!--Table head-->
                                                                              <thead>

                                                                              </thead>
                                                                              <!--Table head-->

                                                                              <!--Table body-->
                                                                              <tbody>
                                                                                <tr>
                                                                                  <td>Pour les restaurants, traiteurs, épiceries</td>
                                                                                  <td>Basic (Découverte du service)</td>
                                                                                  <td>Standard</td>
                                                                                  <td>Gold</td>
                                                                                </tr>
                                                                                <tr>
                                                                                  <td>Montant abonnement mensuel en €</td>
                                                                                  <td>0€ Pas de frais d’abonnement</td>
                                                                                  <td>50€</td>
                                                                                  <td>85€</td>
                                                                                </tr>
                                                                                <tr>
                                                                                  <td>Pour les professionnels fait-maison</td>
                                                                                  <td>Basic (Découverte du service)</td>
                                                                                  <td>Standard Faits Maison</td>
                                                                                  <td>Gold Faits Maison</td>
                                                                                </tr>
                                                                                <tr>
                                                                                    <td>Montant abonnement mensuel en €</td>
                                                                                    <td>0€
                                                                                        Pas de frais d’abonnement
                                                                                    </td>
                                                                                    <td>35€</td>
                                                                                    <td>50€</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Commission par abonnement</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Pourcentage de commission prélevé lors de chaque commande/transaction</td>
                                                                                    <td>20%</td>
                                                                                    <td>15%</td>
                                                                                    <td>12%</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Services/prestations par abonnement</td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Nombre d’images de bannières pour la présentation du commerce/de la boutique</td>
                                                                                    <td>2</td>
                                                                                    <td>5</td>
                                                                                    <td>Illimité</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Pour les professionnels fait-maison è</td>
                                                                                    <td>Basic (Découverte du service)</td>
                                                                                    <td>Standard Faits Maison</td>
                                                                                    <td>Gold Faits Maison</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Bannière sous format diaporama</td>
                                                                                    <td>Non</td>
                                                                                    <td>Non</td>
                                                                                    <td>Oui</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Bannière sous format vidéo</td>
                                                                                    <td>Non</td>
                                                                                    <td>Non</td>
                                                                                    <td>Oui</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Bannière sous format diaporama</td>
                                                                                    <td>Non</td>
                                                                                    <td>Non</td>
                                                                                    <td>Oui</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Nombre de produits maximum autorisés pour le commerce</td>
                                                                                    <td>10</td>
                                                                                    <td>20</td>
                                                                                    <td>illimité</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Périodicité de reversement des montants encaissés</td>
                                                                                    <td>Mensuelle</td>
                                                                                    <td>Mensuelle</td>
                                                                                    <td>Toutes les 2 semaines (bi mensuel</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Priorité de présentation des produits</td>
                                                                                    <td>3</td>
                                                                                    <td>2</td>
                                                                                    <td>1</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Gestion des coupons de promo</td>
                                                                                    <td>Non</td>
                                                                                    <td>Non</td>
                                                                                    <td>Oui</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Statistiques de la boutique</td>
                                                                                    <td>Non</td>
                                                                                    <td>Non</td>
                                                                                    <td>Oui</td>
                                                                                  </tr>
                                                                                  <tr>
                                                                                    <td>Période d’essai du service</td>
                                                                                    <td>Non</td>
                                                                                    <td>Non</td>
                                                                                    <td>Oui(3 mois)</td>
                                                                                  </tr>
                                                                              </tbody>
                                                                              <!--Table body-->
                                                                            </table>
                                                                            <!--Table-->
                                                                          </div>
                                                                          Précisions sur la tarification : <br>
                                                                          Frais d’abonnement et Règlement : <br><br>
                                                                          <i>Pour les boutiques ayant souscrit à un tarif avec abonnement payant (Standard ou Gold)</i> <br>
                                                                          Modalités de règlement de l’abonnement : <br><br>
                                                                          Le règlement des frais d’abonnement se fait tous les mois, au plus tard tous le 05 du mois concerné, soit par : <br><br>
                                                                          <ul style="margin-left: 100px; font-size:14px">
                                                                              <li>carte bancaire (Visa, Mastercard, Eurocard),</li>
                                                                              <li>Virement sur le compte de mangeonsafro ; en cas de virement, vous devez transmettre à mangeonsafro la référence de celui-ci pour contrôle</li>
                                                                              <li>Tout autre moyen de paiement accepté par la plateforeme.</li>
                                                                          </ul><br>
                                                                          Les paiements effectués sur notre site sont 100% sécurisés. Lorsque vous procédez au paiement par carte bancaire, vous devez indiquer le numéro de votre carte, sa date d’expiration et le cryptogramme de sécurité.
                                                                          <br><br><b>Retard ou défaut de règlement :</b><br><br>
                                                                          En cas de retard ou défaut de règlement, le commerce doit régulariser sa situation rapidement et avant le début du mois prochain pour éviter une suspension de service ; si à l’issue du mois, la situation n’est pas régularisée, le compte est suspendu dès le début du mois suivant et ce jusqu’à régularisation de la situation et règlement du mois en cours. Les mois lors desquelles le service a été suspendu ne sont pas comptabilisés.
                                                                          <br><br><b>Changement de tarification :</b> <br><br>
                                                                          Tout mois commencé s’effectue avec la tarification en vigueur au 1er jour calendaire du mois sur le compte ; les demandes de changements de tarification sont à enregistrer avant la fin du mois en cours et sont prises en compte à partir du 1er jour calendaire du mois suivant leur enregistrement. Le commerce a jusqu’au 05 du mois pour régler son nouvel abonnement.
                                                                          <br><br>
                                                                          Exemple:
                                                                          <br><br>
                                                                          <i>
                                                                             Un commerçant qui souhaite passer de la tarification Standard à la tarification Gold, enregistre sa demande au cours du mois de Janvier. La nouvelle tarification Gold entre en vigueur à partir du 1er février et le commerçant a jusqu’au 05 février pour régler sa nouvelle tarification.

                                                                            Un commerçant qui souhaite passer du contrat Standard au contrat Basic saisit sa demande le 1er avril, celle-ci n’entre en vigueur qu’au mois de mai ; l’abonnement du mois d’avril est à régler en tarification standard.
                                                                          </i> <br><br>
                                                                          <b>Arrêt de contrat/désinscription au service :</b><br><br>
                                                                          Lorsque le commerçant décide d’arrêter son contrat avec mangeonsafro et de se désinscrire de la plateforme, il saisit sa demande via le lien indiqué sur le site désinscription. Tout mois commencé étant entièrement dû, la désinscription et l’arrêt du contrat ne deviennent effectifs qu’à compter du mois suivant celui de la réception de la demande de désinscription. <br>
                                                                          <br> Exemple : <br><br>
                                                                          <i>
                                                                            Un commerçant demande sa désinscription le 1er décembre ; celle-ci ne devient effective qu’à compter du 1er janvier. L’abonnement du mois de Décembre doit donc être intégralement réglé à la tarification en cours pour le compte.
                                                                          </i> <br><br>
                                                                          <b>Pourcentage de commission prélevé lors de chaque commande :</b> <br>
                                                                          <br> Il s’agit du pourcentage prélevé par mangeonsafro sur chaque commande passée sur la plateforme ; le pourcentage est fonction de la tarification d’abonnement choisie par le commerce et s’applique sur le montant hors taxe de la commande avant application des réductions promotionnelles du commerce s’il y en a.
                                                                          <br><br>
                                                                          <b style="text-decoration:underline">Précisions sur les services offerts par abonnement :</b> <br>
                                                                         <br> Priorité de présentation des produits : lorsqu’un client fait une recherche sur un produit ou un article précis à partir de son libellé par exemple, tous les produits correspondants trouvés sont affichés par ordre de présentation ; les produits ayant pour priorité de présentation 1 sont affichés en premier, suivis des produits de priorité 2 et pour finir les produits de priorité 3.

                                                                            Si aucun produit de priorité 1 ne correspond à la recherche, on affiche en premier les produits de priorité 2 puis les produits de priorité 3 <br>

                                                                            Si aucun produit de priorité 1 ou 2 trouvé, on affiche les produits de priorité 3. <br>

                                                                            Les produits de même priorité sont affichés par ordre de distance croissant par rapport à l’adresse ou la localisation de l’utilisateur. <br>

                                                                           <br> <b style="text-decoration:underline">Reversement aux commerces des montants de commandes encaissés :</b> <br>
                                                                           <br> Périodicité de reversement : les reversements se font sur une périodicité correspondant à la tarification souscrite par le commerçant c’est-à-dire soit mensuellement pour la tarification Basic ou Standard, soit toutes les 2 semaines pour la tarification Gold. <br>

                                                                            Reversement à la demande : la plateforme offre au commerçant la possibilité de faire des demandes de reversement exceptionnelles, hors dates prévues ; ce service est payant (3% de la somme à reverser ??). <br>

                                                                            Seuil minimum de reversement : Un montant seuil en dessous duquel, un reversement ne peut pas être effectué est définit à 50€ ; lorsque la somme à reverser est inférieure au seuil de 50 €, elle n’est pas reversée. <br>

                                                                            Le prochain versement sera effectivement réalisé dès lors que la somme disponible sera au moins égale à 50 €. <br>
                                                                            !!! Remarques : <br>
                                                                            Lors du reversement des montants encaissés, si le commerce est en retard ou en défaut de règlement de son abonnement, mangeonsafro déduit du montant à reverser le montant du retard de paiement de l’abonnement et ne reverse au commerçant que la différence entre le montant à reverser et les sommes dues à la plateforme. <br>
                                                                            Lorsque le commerce arrête son contrat ou se désinscrit du service, après déduction des éventuelles sommes dûe à mangeonsafro, la totalité du solde restant sur son compte lui est reversée même si celui-ci est inférieur au seuil de 50€.
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
                                                                    aria-selected="true">ENVOI/TRAITEMENT DES COMMANDES</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-17" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <!-- <h6>Condition 10</h6> -->
                                                                    <p>
                                                                        Les commandes enregistrées sont transmises aux commerces au fil de l’eau et doivent être traitées dans les meilleurs délais.

                                                                        En cas de retard ou autre problème dans le traitement d’une commande, le commerce doit immédiatement informé le client via les coordonnées transmis lors de l’enregistrement de la commande.

                                                                        Si le produit commandé n’est plus disponible, le commerçant doit informer immédiatement la plateforme afin que le client soit remboursé.
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-18" role="tab"
                                                                    aria-selected="true">LIVRAISONS</a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-18" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                       <b>Service de livraison :</b> <br><br>
                                                                       A ce jour, mangeonsafro ne gère pas de livreurs indépendant (l’étude de cette solution est en cours).

                                                                        Tous les livreurs travaillant sur la plateforme sont rattachés obligatoirement à un commerce ou à une boutique.

                                                                        Le client doit en principe aller récupérer sa commande dans le commerce où il a commandé sauf si celui-ci dispose d’un service de livraisons et que le client choisi ce moyen pour récupérer ses produits. <br>
                                                                       <br> <b>Conditions et frais des livraisons :</b> <br><br>
                                                                       Il appartient à chaque commerce offrant un service de livraison de définir les conditions et les modalités de calcul des frais de livraison qui seront appliquées par mangeonsafro lors des commandes.

                                                                        Les délais de livraison indiqués sur la plateforme ne sont donnés qu’à titre indicatif. Ils peuvent évoluer en raison de différents facteurs comme la disponibilité des livreurs, la durée de traitement de la commande, la distance de livraison, les conditions de circulation etc… <br>
                                                                        <br><b>Encaissement des frais de livraisons :</b> <br><br>

                                                                        mangeonsafro calcule les frais de livraison selon les conditions et modalités définies par le commerce et les encaisse au moment du règlement des commandes pour le compte des commerces ou livreurs ; à ce titre mangeonsafro n’agit qu’en tant que mandataire du commerce et du livreur pour le paiement <br><br>
                                                                        <b>Reversement des montants de livraisons :</b> <br><br>
                                                                        Les montants sont reversés au livreur toute les 2 semaines ? et dans le cas du commerce lors du reversement des montants encaissés ?<br>
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-20" role="tab"
                                                                    aria-selected="true"> Droit de rétractation
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-20" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        Permettre offerte aux commerces de se rétracter.
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-21" role="tab"
                                                                    aria-selected="true"> GARANTIE ET DROIT DE RETOUR DU PRODUIT
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-21" role="tabpanel">
                                                                <div class="product__details__tab__desc">

                                                                    <p>
                                                                        Le client bénéficie de la garantie légale de conformité et donc d’une application de l’article L211-4 du Code de la consommation. Ainsi, le commerce s’engage à livrer des produits conformes à la description et à répondre à tout défaut de conformité.

                                                                        La garantie est applicable aux produits commercialisés à travers la plateforme, non conformes au regard de la législation ou ne répondant pas à la description mentionnée.

                                                                        En présence d’une réclamation client justifiée, le commerce s’engage à remplacer le produit si cela convient au client ou à demander à la plateforme le remboursement du client.

                                                                        S’agissant de produits alimentaires, à réception de sa commande, le client doit immédiatement vérifier son contenu et s’assurer qu’il est complet et conforme à la commande passée.

                                                                       <br> S’il constate des erreurs : <br>
                                                                       <ul style="font-size: 14px; margin-left:100px">
                                                                           <li> Pour une commande à retirer sur place, il doit les signaler de suite au commerçant afin que ce dernier puisse se conformer à la commande reçue.</li>
                                                                           <li>Pour une commande reçue en livraison, le client signale les erreurs au livreur et au commerçant qui doit les corriger.</li>
                                                                       </ul><br>
                                                                        Le commerce s’engage à traiter toutes les réclamations clients de manière à parvenir dans un délai raisonnable à une solution amiable.

                                                                        Si les remarques du client ne sont pas prises en compte ou ne sont pas traitées de manière satisfaisante par le commerçant, le client doit enregistrer une réclamation concernant sa commande sur la plateforme.
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-22" role="tab"
                                                                    aria-selected="true">AVIS ET COMMENTAIRES
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-22" role="tabpanel">
                                                                <div class="product__details__tab__desc">

                                                                    <p>
                                                                        Après chaque commande, dans un soucis de vous permettre de vous améliorer, le client est invité à noter les produits et le commerce selon les critères suivants : Qualité des produits, rapport qualité/prix, accueil, service… <br>
                                                                        Les notes et avis concernant votre commerce et vos produits sont consultables sur votre espace avec la possibilité d’apporter une réponse ou des précisions sur l’avis du client. <br>
                                                                        Le commerce s’engage à respecter dans ses réponses les règles de bonnes pratiques suivantes : <br>
                                                                        <ul style="margin-left: 100px; font-size:14px">
                                                                            <li>La réponse doit concerner exclusivement l’avis du client.</li>
                                                                            <li>ne pas mettre en ligne de contenus pouvant porter atteinte aux intérêts de tierces personnes</li>
                                                                        </ul> <br>
                                                                        mangeonsafro peut exercer une modération sur les publications et se réserve le droit de refuser leur mise en ligne sans avoir à s’en justifier auprès du commerce dans l’un des cas suivants : <br><br>
                                                                        <ul style="margin-left: 100px; font-size:14px">
                                                                            <li>Ia réponse ne respecte pas les conditions énoncées ci-dessus ;</li>
                                                                            <li>mangeonsafro estime que sa responsabilité civile ou pénale peut être engagée ;</li>
                                                                            <li>le contenu ou les éléments relatifs comportent des injures ou grossièretés ;</li>
                                                                            <li>le contenu est sans rapport avec la commande passée ou le commerce noté ;</li>
                                                                            <li>le contenu comporte des éléments de conflits d’intérêts ou de fraude ;</li>
                                                                            <li>le contenu formule un commentaire inapproprié sur un autre Utilisateur ou son auteur ;</li>
                                                                            <li>le Contenu comporte des informations personnelles ou des éléments susceptibles d’aboutir à un vol d’identité, telles que le nom ou prénom d’individus qui ne sont pas des personnes publiques,un numéro de téléphone, une adresse physique précise ou une adresse email</li>
                                                                            <li>le Contenu mentionne des sites Internet, liens hypertexte, URL, adresses email ou numéros de téléphone ;</li>
                                                                            <li>le Contenu est clairement du spam.</li>
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-23" role="tab"
                                                                    aria-selected="true">ARTICLE 11 : RECLAMATIONS/ASSISTANCES COMMERCES
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-23" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        Pour toute réclamation ou assistance envers la plateforme, le commerce doit s’adresser aux équipes mangeonsafro via les coordonnées suivantes : <br>
                                                                        Email : <br>
                                                                        Téléphone : <br>
                                                                        Et éventuellement, par courrier postal à l’adresse mentionnée ci-dessous : <br>
                                                                        FHET CONSULTING <br>
                                                                        c/o mangeonsafro <br>
                                                                        1, Rue René Cassin <br>
                                                                        94270 Le Kremlin Bicêtre <br>
                                                                        France <br>
                                                                        ou par mail à contact@mangeonsafro.com <br>
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-24" role="tab"
                                                                    aria-selected="true">SUSPENSION/DESINSCRIPTION
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-24" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        Tout commerce régulièrement inscrit pourra demander l’arrêt de son contrat et sa désinscription de la plateforme en envoyant une demande de désinscription par email à l’adresse desinscription@mangeonsafro.com.

                                                                        Celle-ci sera traitée par Mangeonsafro dans un délai raisonnable et prendra effet à compter du 1er jour du mois suivant celui de la réception de la demande.

                                                                        Une fois sa désinscription effective, le commerce ne pourra plus accéder à son compte, ni bénéficier des services réservés du site. Ses commandes en cours seront annulées/traitées jusqu’au bout ? le solde de son compte lui sera reversé après retenue éventuelle des sommes dûes à mangeonsafro.

                                                                        Les cas de suspension : défaut de règlement de l’abonnement.
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-25" role="tab"
                                                                    aria-selected="true">PROPRIETE INTELLECTUELLE
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-25" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        Les marques, logos, signes ainsi que tous les contenus de la plateforme (textes, images, son, graphismes, icônes, sons, logiciels…) font l’objet d’une protection par le Code de la propriété intellectuelle et plus particulièrement par le droit d’auteur.

                                                                        La marque et le logo « mangeonsafro » sont des marques déposées de FHET CONSULTING (Numéro de dépôt INPI : 4674907). Toute représentation et/ou reproduction et/ou exploitation partielle ou totale de cette marque, de quelque nature que ce soit est totalement prohibée.

                                                                        Toute reproduction, représentation, modification, publication, adaptation totale ou partielle des éléments du site, par quelque procédé que ce soit, sans l’autorisation expresse écrite de FHET Consulting constituerait une contrefaçon et serait poursuivie conformément aux dispositions des articles L 335-2 et suivants du Code de la propriété intellectuelle.
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-26" role="tab"
                                                                    aria-selected="true">RESPONSABILITES
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-26" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        Conformément à l’article 1147 du Code civil, nous nous engageons à mettre à votre disposition une plateforme fonctionnant 24h/24 sauf cas de force majeure ayant pour conséquence un dysfonctionnement du site ou serveur et sous réserve de toute interruption ou modification en cas de maintenance, n’engage pas la responsabilité du mangeonsafro.

                                                                        Dans ces cas, le commerce accepte ainsi ne pas tenir rigueur à l’éditeur de toute interruption ou suspension de service, même sans préavis.

                                                                        Le commerce a la possibilité de contacter le site par messagerie électronique à l’adresse email de l’éditeur communiqué contact@mangeonsafro.com
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-27" role="tab"
                                                                    aria-selected="true">DONNEES A CARACTERE PERSONNEL
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-27" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        Certaines informations relatives au responsable de commerce seront collectées (à savoir le nom, prénom, adresse, code postal et numéro de téléphone) et ce, afin d’avoir un interlocuteur identifié pour chaque commerce <br>
                                                                        Le site s’engage à procéder à la collecte et au traitement des informations personnelles conformément à la loi n°78-17 du 6 janvier 1978 relative à l’informatique, aux fichiers et aux libertés. Le site est déclaré à la CNIL sous le numéro [numéro]. <br>
                                                                        En vertu des articles 39 et 40 de la loi en date du 6 janvier 1978, le client dispose d’un droit d’accès, de rectification, de suppression et d’opposition de ses données personnelles via son espace personnel, le formulaire de contact, par mail à contac@mangeonsafro.com, ou par courrier au <br>
                                                                        FHET CONSULTING <br>
                                                                        C/O mangeonsafro <br>
                                                                        1, rue René Cassin, <br>
                                                                        94270 Le Kremlin-Bicêtre, FRANCE <br>
                                                                        Adresse e-mail : contact@mangeonsafro.com
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
                                                                <a class="nav-link active" data-toggle="tab" href="#tabs-28" role="tab"
                                                                    aria-selected="true">JURIDICTION COMPETENTE ET DROIT APPLICABLE
                                                                </a>
                                                            </li>
                                                        </ul>
                                                        <div class="tab-content">
                                                            <div class="tab-pane active" id="tabs-28" role="tabpanel">
                                                                <div class="product__details__tab__desc">
                                                                    <p>
                                                                        La législation française s’applique au présent contrat. En cas d’absence de résolution amiable d’un litige né entre les parties, les tribunaux français seront seuls compétents. <br>
                                                                        our toute question relative à l’application des présentes CGV, vous pouvez joindre la société : <br>
                                                                        FHET CONSULTING <br>
                                                                        C/O mangeonsafro <br>
                                                                        1, rue René Cassin, <br>
                                                                        94270 Le Kremlin-Bicêtre, FRANCE <br>
                                                                        Adresse e-mail : contact@mangeonsafro.com
                                                                    </p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
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
    <!-- Conditions generales de vente pro Section End -->
@endsection
