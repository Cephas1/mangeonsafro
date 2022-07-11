<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span class="avatar">
                        <img alt="" src="{{asset('assets-back/img/profiles/avatar-09.jpg')}}">
                    </span>
                </li>
                <!-- Dashboard  -->
                <li class="submenu">
                    <a href="#"><i class="la la-dashboard"></i> <span> Dashboard</span> <span
                            class="menu-arrow"></span></a>
                    <ul class="sidebar-list">
                        <li><a class="{{ request()->routeIs('dashboard') ? 'active' : '' }}"
                                href="{{ route('dashboard') }}">Graphes statistiques</a></li>
                        <li><a class="{{ request()->routeIs('statistical-board') ? 'active' : '' }}"
                                href="{{ route('statistical-board') }}">Tableaux statistiques</a></li>
                    </ul>
                </li>
                <!-- End/Dashboard -->

                <!-- Trade management -->
                <li class="submenu">
                    <a href="#"><i class="las la-store-alt"></i> <span>Gestion de commerces</span> <span
                            class="menu-arrow"></span></a>
                    <ul class="sidebar-list">
                        <li>
                            <a class="{{ request()->routeIs('list-commerce') ? 'active' : '' }}"
                                href="{{ route('list-commerce') }}">Liste des commerces</a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('order') ? 'active' : '' }}"
                                href="{{ route('order') }}">Commandes <span
                                    class="badge badge-pill bg-primary float-right">1</span></a>
                        </li>
                        <li>
                            <a class="{{ request()->routeIs('categories-commerce') ? 'active' : '' }}"
                                href="{{ route('categories-commerce') }}">Catégories commerces</a>
                        </li>
                    </ul>
                </li>
                <!-- end trade management -->

                <!-- product management -->
                <li class="menu-title">
                    <span> </span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-shopping-bag"></i> <span>Gestion de produits</span> <span
                            class="menu-arrow"></span></a>
                    <ul class="sidebar-list">
                        <li><a class="{{ request()->routeIs('products') ? 'active' : '' }}"
                                href="{{ route('products.index') }}">Produits</a></li>
                        <li><a class="{{ request()->routeIs('categories-product.index') ? 'active' : '' }}"
                                href="{{ route('categories-product.index') }}">Catégories produits</a></li>
                    </ul>
                </li>
                <!-- end products manager -->

                <!-- Users manager -->
                <li class="menu-title">
                    <span></span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-users"></i> <span>Gestion des utilisateurs </span> <span
                            class="menu-arrow"></span></a>
                    <ul class="sidebar-list">
                        <li><a class="{{ request()->routeIs('users-all.index') ? 'active' : '' }}"
                                href="{{ route('users-all.index') }}">Tous les utilisateurs</a></li>
                        <li><a class="{{ request()->routeIs('super-admin.index') ? 'active' : '' }}"
                                href="{{ route('super-admin.index') }}">Super Admin</a></li>
                        <li><a class="{{ request()->routeIs('admin.index') ? 'active' : '' }}"
                                href="{{ route('admin.index') }}">Admin</a></li>
                        <li><a class="{{ request()->routeIs('customer.index') ? 'active' : '' }}"
                                href="{{ route('customer.index') }}">Client</a></li>
                        <li><a class="{{ request()->routeIs('deliveryman.index') ? 'active' : '' }}"
                                href="{{ route('deliveryman.index') }}">Livreur</a></li>
                        <li><a class="{{ request()->routeIs('sale-manager.index') ? 'active' : '' }}"
                                href="{{ route('sale-manager.index') }}">Responsable commerce</a></li>
                        <li><a class="{{ request()->routeIs('seller.index') ? 'active' : '' }}"
                                href="{{ route('seller.index') }}">Vendeur</a></li>
                    </ul>
                </li>
                <!-- End users manager -->

                <!-- payment manager -->
                <li class="menu-title">
                    <span></span>
                </li>
                <li class="submenu">
                    <a href="#"><i class="la la-money"></i> <span>Gestion des paiements</span> <span
                            class="menu-arrow"></span></a>
                    <ul class="sidebar-list">
                        <li><a class="{{ request()->routeIs('payments') ? 'active' : '' }}"
                            href="{{ route('payments') }}">Paiements</a></li>
                        <li>
                            <li class="submenu">
                                <a class="{{ request()->routeIs('payment-mode') ? 'active' : '' }}"
                                    href="{{ route('payment-mode') }}"><span>Mode de paiement</span> <span class="menu-arrow"></span></a>
                                <ul class="sidebar-list">
                                    <li><a class="{{ request()->routeIs('cash') ? 'active' : '' }}"
                                        href="{{ route('cash') }}">Espèce</a></li>
                                    <li><a class="{{ request()->routeIs('bank-card') ? 'active' : '' }}"
                                        href="{{ route('bank-card') }}">Carte bancaire</a></li>
                                    <li><a class="{{ request()->routeIs('mobil-banking') ? 'active' : '' }}"
                                        href="{{ route('mobil-banking') }}">Mobile Banking</a></li>
                                </ul>
                            </li>
                        </li>
                </li>
                <!-- end payment manager -->
            </ul>

            <!-- Delivery manager -->
            <li class="menu-title">
                <span> </span>
            </li>
            <li class="submenu">
                <a href="#"><i class="las la-motorcycle"></i> <span>Gestion des livraisons</span> <span
                        class="menu-arrow"></span></a>
                <ul class="sidebar-list">
                    <li><a class="{{ request()->routeIs('delivery') ? 'active' : '' }}"
                            href="{{ route('delivery') }}">Livraisons</a></li>
                    <li><a class="{{ request()->routeIs('delivery-address') ? 'active' : '' }}"
                            href="{{ route('delivery-address') }}">Adresse de livraison</a></li>
                </ul>
            </li>
            <!-- end delivery manager -->

            <!-- CRM manager -->
            <li class="menu-title">
                <span></span>
            </li>
            <li class="submenu">
                <a href="#"><i class="las la-user-tie"></i><span>Gestion CRM</span> <span class="menu-arrow"></span></a>
                <ul class="sidebar-list">
                    <li><a class="{{ request()->routeIs('prospect') ? 'active' : '' }}"
                        href="{{ route('prospect') }}">Prospect</a></li>
                    <li><a class="{{ request()->routeIs('call') ? 'active' : '' }}"
                        href="{{ route('call') }}">Appels</a></li>
                    <li><a class="{{ request()->routeIs('mailing') ? 'active' : '' }}"
                        href="{{ route('mailing') }}">Mailing</a></li>
                </ul>
            </li>
            <!-- end CRM manager -->

            <!-- Reprots -->
            <li class="menu-title">
                <span></span>
            </li>
            <li class="submenu">
                <a href="#"><i class="la la-pie-chart"></i> <span> Rapports </span> <span
                        class="menu-arrow"></span></a>
                <ul class="sidebar-list">
                    <li><a class="{{ request()->routeIs('sales-report') ? 'active' : '' }}"
                            href="{{ route('sales-report') }}">Rapport de Vente</a></li>
                    <li><a class="{{ request()->routeIs('users-report') ? 'active' : '' }}"
                            href="{{ route('users-report') }}">Rapport client</a></li>
                    <li><a class="{{ request()->routeIs('deliveryman-report') ? 'active' : '' }}"
                            href="{{ route('deliveryman-report') }}">Rapport livreurs</a></li>
                    <li><a class="{{ request()->routeIs('orders-report') ? 'active' : '' }}"
                            href="{{ route('orders-report') }}">Rapport commande</a></li>
                    <li><a class="{{ request()->routeIs('trades-report') ? 'active' : '' }}"
                            href="{{ route('trades-report') }}">Rapport commerce</a></li>
                    <li><a class="{{ request()->routeIs('products-report') ? 'active' : '' }}"
                            href="{{ route('products-report') }}"> Rapport Produit </a></li>
                </ul>
            </li>
            <!-- end reports -->

            <!-- Settings -->
            <li class="menu-title">
                <span></span>
            </li>
            <li class="submenu">
                <a href="#"><i class="las la-tools"></i><span> Parametres </span> <span class="menu-arrow"></span></a>
                <ul class="sidebar-list">
                    <li><a class="{{ request()->routeIs('banner') ? 'active' : '' }}"
                            href="{{ route('banner') }}">Bannières</a></li>
                    <li><a class="{{ request()->routeIs('rules') ? 'active' : '' }}"
                        href="{{ route('rules') }}">Rôles</a></li>
                    <li><a class="{{ request()->routeIs('permission') ? 'active' : '' }}"
                        href="{{ route('permission') }}">Permissions</a></li>
                </ul>
            </li>
            <!-- end settings -->
        </div>
    </div>
</div>
<!-- /Sidebar -->
