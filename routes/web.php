<?php

use App\Http\Controllers\Admin\CategorieShopController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\EvaluationsController;
use App\Http\Controllers\Admin\ImageCategoriesController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Site\ProfileController as SiteProfileController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use Spatie\Permission\Models\Role;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
*/

Route::get('demo', function () {
    return view('index');
});

Route::get('/', HomeController::class)->name('home');
Route::get('/profile', [ProfileController::class, 'index'])->middleware(['auth'])->name('frontend.profile.profile');

/*
|--------------------------------------------------------------------------
| Web Routes - Frontend
|--------------------------------------------------------------------------
*/

Route::middleware('auth')->group(function () {
    Route::get('/profile/{slug?}', [SiteProfileController::class, 'index'])->name('frontend.profile.profile');
});

Route::get('commerce-a-propos-de-nous', function () {
    return view('stevie.frontend.a-propos-de-nous.a-propos-de-nous');
})->name('a-propos-de-nous');

Route::get('blog', function () {
    return view('stevie.frontend.blog.blog');
})->name('blog');

Route::get('checkout', function () {
    return view('stevie.frontend.checkout.checkout');
})->name('checkout');

Route::get('comment-ca-marche', function () {
    return view('stevie.frontend.comment-ca-marche.comment-ca-marche');
})->name('comment-ca-marche');

Route::get('commerce-list', [\App\Http\Controllers\ShopController::class, 'index'])->name('commerce-list');

Route::get('commerce-map', function () {
    return view('stevie.frontend.commerce-map.commerce-map');
})->name('commerce-map');

Route::get('commerce-page/{id}', [\App\Http\Controllers\ShopController::class, 'show'])->name('commerce-page');

Route::get('comming-soon', function () {
    return view('stevie.frontend.comming-soon.comming-soon');
})->name('comming-soon');

Route::get('conditions-generales-utilisation', function () {
    return view('stevie.frontend.conditions-generales-d-utilisation.conditions-generales-d-utilisation');
})->name('conditions-generales-utilisation');

Route::get('conditions-generales-utilisation-pro', function () {
    return view('stevie.frontend.conditions-generales-d-utilisation-pro.conditions-generales-d-utilisation-pro');
})->name('conditions-generales-utilisation-pro');

Route::get('conditions-generales-de-vente', function () {
    return view('stevie.frontend.conditions-generales-de-vente.conditions-generales-de-vente');
})->name('conditions-generales-de-vente');

Route::get('conditions-generales-de-vente-pro', function () {
    return view('stevie.frontend.conditions-generales-de-vente-pro.conditions-generales-de-vente-pro');
})->name('conditions-generales-de-vente-pro');

Route::get('conctact', function () {
    return view('stevie.frontend.contact.contact');
})->name('conctact');

Route::get('faq', function () {
    return view('stevie.frontend.faq.faq');
})->name('faq');

Route::get('faq-pro', function () {
    return view('stevie.frontend.faq-pro.faq-pro');
})->name('faq-pro');

Route::get('favoris', function () {
    return view('stevie.frontend.favoris.favoris');
})->name('favoris');

Route::get('home', function () {
    return view('stevie.frontend.home.home');
})->name('home');

Route::get('politique-de-confidentialite', function () {
    return view('stevie.frontend.politique-de-confidentialite.politique-de-confidentialite');
})->name('politique-de-confidentialite');

Route::get('product-details', function () {
    return view('stevie.frontend.product-details.product-details');
})->name('product-details');

Route::get('services-et-prestations', function () {
    return view('stevie.frontend.services-et-prestations.services-et-prestations');
})->name('services-et-prestations');

Route::get('shop-grid', function () {
    return view('stevie.frontend.shop-grid.shop-grid');
})->name('shop-grid');

Route::get('shopping-cart', function () {
    return view('stevie.frontend.shopping-cart.shopping-cart');
})->name('shopping-cart');

Route::get('profile', function () {
    return view('frontend.profile.profile');
})->name('profile');


/*
|--------------------------------------------------------------------------
| Web Routes - Authentification Page
|--------------------------------------------------------------------------
*/

Route::get('connexion', function () {
    return view('stevie.auth.login');
})->name('connexion');

Route::get('inscription', function () {
    return view('stevie.auth.register');
})->name('inscription');

/*
|--------------------------------------------------------------------------
| Web Routes - Images upload
|--------------------------------------------------------------------------
*/
Route::get('image', [ImageCategoriesController::class, 'index']);
Route::post('save', [ImageCategoriesController::class, 'save']);

/*
|--------------------------------------------------------------------------
| Web Routes - Backend
|--------------------------------------------------------------------------
*/



Route::prefix('backend')->middleware(['auth'])->group(function () {
    Route::get('/', [DashboardController::class, 'index'])->name('dashboard');
    Route::resource('/categorie-shop', CategorieShopController::class);
    Route::resource('/shop', ShopController::class);

    Route::get('crm', function () {
        return view('backend.crm.index');
    })->name('crm');

    Route::get('statistical-board', function () {
        return view('backend.statistical-board.index');
    })->name('statistical-board');

    Route::get('list-commerce', function () {
        return view('backend.list-commerce.index');
    })->name('list-commerce');

    /////////////////////////////////////// Routes Pierre
    Route::get('/products', [App\Http\Controllers\ProductController::class, 'index'])->name('products.index');
    Route::post('/products', [App\Http\Controllers\ProductController::class, 'store'])->name('products.store');
    Route::post('/products/edit', [App\Http\Controllers\ProductController::class, 'edit'])->name('products.edit');
    Route::get('/products/edit/', [App\Http\Controllers\ProductController::class, 'createEdit'])->name('products.edit.create');
    //Route::post('/products/edit', [App\Http\Controllers\ProductController::class, 'createEdit'])->name('products.edit.create');
    Route::get('/products/destroy/{id}', [App\Http\Controllers\ProductController::class, 'destroy'])->name('products.destroy');
    Route::get('/products/active/{id}', [App\Http\Controllers\ProductController::class, 'isActivated'])->name('products.active');

    Route::get('/categories-product', [App\Http\Controllers\CategorieProductController::class, 'index'])->name('categories-product');
    Route::get('/categories-product', [App\Http\Controllers\CategorieProductController::class, 'index'])->name('categories-product.index');
    Route::post('/categories-product', [App\Http\Controllers\CategorieProductController::class, 'store'])->name('categories-product.store');
    Route::get('/categories-product/edit/{id}', [App\Http\Controllers\CategorieProductController::class, 'createEdit'])->name('categories-product.edit.create');
    //Route::post('/categories-product/edit', [App\Http\Controllers\CategorieProductController::class, 'createEdit'])->name('categories-product.edit.create');
    Route::post('/categories-product/edit', [App\Http\Controllers\CategorieProductController::class, 'edit'])->name('categories-product.edit');
    Route::get('/categories-product/destroy/{id}', [App\Http\Controllers\CategorieProductController::class, 'destroy'])->name('categories-product.destroy');
    Route::get('/categories-product/active/{id}', [App\Http\Controllers\CategorieProductController::class, 'isActivated'])->name('categories-product.active');
    //Route::post('/categories-product/active/{id}', [App\Http\Controllers\CategorieProductController::class, 'isActivated'])->name('categories-product.active');


    Route::post('pierre1', [App\Http\Controllers\ProductController::class, 'store'])->name('products.pierre1');
    /////////////////////////////////////// End Routes Pierre

    Route::get('order', function () {
        return view('backend.order.index');
    })->name('order');

    /*
    |--------------------------------------------------------------------------
    | Web Routes - Backend - Users
    | Debut
    |--------------------------------------------------------------------------
    */

    Route::prefix('user')->group(function () {
        Route::get('/users-all', [UserController::class, 'allUser'])->name('users-all.index');
        Route::get('/super-admin', [UserController::class, 'superAdmin'])->name('super-admin.index');
        Route::get('/admin', [UserController::class, 'admin'])->name('admin.index');
        Route::get('/customer', [UserController::class, 'customer'])->name('customer.index');
        Route::get('/deliveryman', [UserController::class, 'deliveryman'])->name('deliveryman.index');
        Route::get('/sale-manager', [UserController::class, 'saleManager'])->name('sale-manager.index');
        Route::get('/seller', [UserController::class, 'seller'])->name('seller.index');
        Route::get('/change-role/{id}', [UserController::class, 'changerRole'])->name('role.user.get');
        Route::post('/change-role/{id}', [UserController::class, 'changerRolePost'])->name('role.user.post');
        Route::get('/user-details/{id}', [UserController::class, 'userDetails'])->name('user-details.index');
    });
    /*
    |--------------------------------------------------------------------------
    | Web Routes - Backend - Users
    | Fin
    |--------------------------------------------------------------------------
    */



    Route::get('delivery', function () {
        return view('backend.delivery.index');
    })->name('delivery');
    Route::get('delivery-address', function () {
        return view('backend.delivery-address.index');
    })->name('delivery-address');

    Route::get('deliveryman-report', function () {
        return view('backend.deliveryman-report.index');
    })->name('deliveryman-report');

    // Route::get('clients', function () {
    //     return view('backend.clients.index');
    // })->name('clients');
    Route::resource('clients', ClientController::class);

    // Route::get('client-profile', function () {
    //     return view('backend.client-profile.index');
    // })->name('client-profile');

    Route::get('clients-list', function () {
        return view('backend.clients-list.index');
    })->name('clients-list');

    Route::get('profile', function () {
        return view('backend.profile.index');
    })->name('profile');

    Route::get('commerce', function () {
        return view('backend.commerce.index');
    })->name('commerce');

    // Route::get('categories-commerce', function () {
    //     return view('backend.categories.index');
    // })->name('categories-commerce');
    Route::get('categories-commerce', [CategorieShopController::class, 'index'])->name('categories-commerce');

    Route::get('daily-sales', function () {
        return view('backend.daily-sales.index');
    })->name('daily-sales');

    Route::get('all-sales', function () {
        return view('backend.all-sales.index');
    })->name('all-sales');

    Route::get('sales-report', function () {
        return view('backend.sales-report.index');
    })->name('sales-report');

    Route::get('users-report', function () {
        return view('backend.users-report.index');
    })->name('users-report');

    Route::get('delivery-report', function () {
        return view('backend.delivery-report.index');
    })->name('delivery-report');

    Route::get('orders-report', function () {
        return view('backend.orders-report.index');
    })->name('orders-report');

    Route::get('trades-report', function () {
        return view('backend.trades-report.index');
    })->name('trades-report');

    Route::get('products-report', function () {
        return view('backend.products-report.index');
    })->name('products-report');

    Route::get('chat', function () {
        return view('backend.chat.index');
    })->name('chat');

    Route::get('activities', function () {
        return view('backend.activities.index');
    })->name('activities');

    Route::get('users', function () {
        return view('backend.users.index');
    })->name('users');

    Route::get('settings', function () {
        return view('backend.settings.index');
    })->name('settings');

    Route::get('banner', function () {
        return view('backend.banner.index');
    })->name('banner');

    Route::get('payments', function () {
        return view('backend.payments.index');
    })->name('payments');

    Route::get('payment-mode', function () {
        return view('backend.payment-mode.index');
    })->name('payment-mode');

    Route::get('cash', function () {
        return view('backend.cash.index');
    })->name('cash');

    Route::get('bank-card', function () {
        return view('backend.bank-card.index');
    })->name('bank-card');

    Route::get('mobil-banking', function () {
        return view('backend.mobil-banking.index');
    })->name('mobil-banking');

    Route::get('mailing', function () {
        return view('backend.mailing.index');
    })->name('mailing');

    Route::get('call', function () {
        return view('backend.call.index');
    })->name('call');

    Route::get('prospect', function () {
        return view('backend.prospect.index');
    })->name('prospect');

    Route::get('rules', function () {
        return view('backend.rules.index');
    })->name('rules');

    Route::get('permission', function () {
        return view('backend.permission.index');
    })->name('permission');

    Route::get('trade-category', function () {
        return view('backend.trade-category.index');
    })->name('trade-category');

    Route::get('platform-deliverers', function () {
        return view('backend.platform-deliverers.index');
    })->name('platform-deliverers');



    // Route::get('image', 'ImageController@index');
    // Route::post('save', 'ImageController@save');
    // Route::resource('image', ImageController::class);

    //Route::get('admin-home', [DashboardController::class, 'index'])->name('admin-home');
});


/*
|--------------------------------------------------------------------------
| Web Routes - Backend - Admin
| Debut
|--------------------------------------------------------------------------
*/
Route::get('admin-all-users', [UserController::class, 'index'])->name('admin-all-users');
Route::get('admin-active-user/{id}', [UserController::class, 'isActivated'])->name('admin-active-user');
Route::get('admin-destroy-user/{id}', [UserController::class, 'destroy'])->name('admin-detroy-user');

Route::get('admin-categories-commerces', [ShopController::class, 'indexCategoriesShops'])->name('admin-categories-commerces');
Route::get('/categories-shop/active/{id}', [ShopController::class, 'isActivated'])->name('categories-shop.active');
Route::post('/categories-shop/edit/{id}', [ShopController::class, 'updateCategoriesShop'])->name('categories-shop.edit');
Route::post('/categories-shop/add', [ShopController::class, 'storeCategoriesShop'])->name('categories-shop.add');
Route::get('/categories-shop/destroy/{id}', [ShopController::class, 'destroyCategoriesShop'])->name('categories-shop.destroy');

Route::get('admin-categories-users', [UserController::class, 'indexRoles'])->name('admin-categories-users');
Route::post('admin-categories-users/add', [UserController::class, 'addRoles'])->name('admin-categories-users.add');
Route::post('admin-categories-users/edit/{id}', [UserController::class, 'editRoles'])->name('admin-categories-users.edit');
Route::get('admin-categories-users/destroy/{id}', [UserController::class, 'destroyRoles'])->name('admin-categories-users.destroy');

Route::get('admin-evaluations', [EvaluationsController::class, 'indexAdmin'])->name('admin-evaluations');

Route::get('admin-gestion-des-commandes', [OrderController::class, 'index'])->name('admin-gestion-des-commandes');

Route::get('admin-home', [DashboardController::class, 'index'])->name('admin-home');

Route::get('admin-list-commerces', [ShopController::class, 'index'])->name('admin-list-commerces');
Route::get('/shop/destroy/{id}', [ShopController::class, 'destroy'])->name('shop.destroy');

Route::get('admin-profile', function () {
    return view('stevie.backend.admin.admin-profile.admin-profile');
})->name('admin-profile');
 /*
|--------------------------------------------------------------------------
| Web Routes - Backend - Admin
| Fin
|--------------------------------------------------------------------------
*/

/*
|--------------------------------------------------------------------------
| Web Routes - Backend - client
| Debut
|--------------------------------------------------------------------------
*/
Route::get('client-home', function () {
    return view('stevie.backend.client.client-home.client-home');
})->name('client-home');

Route::get('client-mes-commandes', function () {
    return view('stevie.backend.client.client-mes-commandes.client-mes-commandes');
})->name('client-mes-commandes');

Route::get('client-mes-produits-preferes', function () {
    return view('stevie.backend.client.client-mes-produits-preferes.client-mes-produits-preferes');
})->name('client-mes-produits-preferes');

Route::get('client-profile', function () {
    return view('stevie.backend.client.client-profile.client-profile');
})->name('client-profile');
 /*
|--------------------------------------------------------------------------
| Web Routes - Backend - client
| Fin
|--------------------------------------------------------------------------
*/


/*
|--------------------------------------------------------------------------
| Web Routes - Backend - Vendeur
| Debut
|--------------------------------------------------------------------------
*/
Route::get('vendeur-categories-produits', function () {
    return view('stevie.backend.vendeur.vendeur-categories-produits.vendeur-categories-produits');
})->name('vendeur-categories-produits');

Route::get('vendeur-home', function () {
    return view('stevie.backend.vendeur.vendeur-home.vendeur-home');
})->name('vendeur-home');

Route::get('vendeur-mes-commandes', function () {
    return view('stevie.backend.vendeur.vendeur-mes-commandes.vendeur-mes-commandes');
})->name('vendeur-mes-commandes');

Route::get('vendeur-mes-commentaires', function () {
    return view('stevie.backend.vendeur.vendeur-mes-commentaires.vendeur-mes-commentaires');
})->name('vendeur-mes-commentaires');

Route::get('vendeur-mes-informations', function () {
    return view('stevie.backend.vendeur.vendeur-mes-informations.vendeur-mes-informations');
})->name('vendeur-mes-informations');

Route::get('vendeur-mes-produits', function () {
    return view('stevie.backend.vendeur.vendeur-mes-produits.vendeur-mes-produits');
})->name('vendeur-mes-produits');

Route::get('vendeur-mon-portefeuille', function () {
    return view('stevie.backend.vendeur.vendeur-mon-portefeuille.vendeur-mon-portefeuille');
})->name('vendeur-mon-portefeuille');

Route::get('vendeur-profile', function () {
    return view('stevie.backend.vendeur.vendeur-profile.vendeur-profile');
})->name('vendeur-profile');
 /*
|--------------------------------------------------------------------------
| Web Routes - Backend - Vendeur
| Fin
|--------------------------------------------------------------------------
*/




require __DIR__ . '/auth.php';
