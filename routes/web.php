<?php

use App\Http\Controllers\Admin\CategorieShopController;
use App\Http\Controllers\Admin\ProductController;
use App\Http\Controllers\Admin\ClientController;
use App\Http\Controllers\Admin\ImageCategoriesController;
use App\Http\Controllers\Admin\ShopController;
use App\Http\Controllers\Admin\UserController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
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

Route::get('blog', function () {
    return view('frontend.blog.blog');
})->name('blog');

Route::get('blog-details', function () {
    return view('frontend.blog-details.blog-details');
})->name('blog-details');

Route::get('checkout', function () {
    return view('frontend.checkout.checkout');
})->name('checkout');

Route::get('coming-soon', function () {
    return view('frontend.coming-soon.coming-soon');
})->name('coming-soon');

Route::get('comment-ca-marche', function () {
    return view('frontend.comment-ca-marche.comment-ca-marche');
})->name('comment-ca-marche');

Route::get('comment-ca-marche-liv', function () {
    return view('frontend.comment-ca-marche-liv.comment-ca-marche-liv');
})->name('comment-ca-marche-liv');

Route::get('comment-ca-marche-pro', function () {
    return view('frontend.comment-ca-marche.comment-ca-marche-pro');
})->name('comment-ca-marche-pro');

Route::get('conditions-generales-de-vente', function () {
    return view('frontend.conditions-generales-de-vente.conditions-generales-de-vente');
})->name('conditions-generales-de-vente');

Route::get('conditions-generales-de-vente-liv', function () {
    return view('frontend.conditions-generales-de-vente-liv.conditions-generales-de-vente-liv');
})->name('conditions-generales-de-vente-liv');

Route::get('conditions-generales-de-vente-pro', function () {
    return view('frontend.conditions-generales-de-vente-pro.conditions-generales-de-vente-pro');
})->name('conditions-generales-de-vente-pro');

Route::get('conditions-generales-dutilisation', function () {
    return view('frontend.conditions-generales-dutilisation.conditions-generales-dutilisation');
})->name('conditions-generales-dutilisation');

Route::get('conditions-generales-dutilisation-liv', function () {
    return view('frontend.conditions-generales-dutilisation-liv.conditions-generales-dutilisation-liv');
})->name('conditions-generales-dutilisation-liv');

Route::get('conditions-generales-dutilisation-pro', function () {
    return view('frontend.conditions-generales-dutilisation-pro.conditions-generales-dutilisation-pro');
})->name('conditions-generales-dutilisation-pro');

Route::get('contact', function () {
    return view('frontend.contact.contact');
})->name('contact');

Route::get('faq', function () {
    return view('frontend.faq.faq');
})->name('faq');

Route::get('politique-de-confidentialite', function () {
    return view('frontend.politique-de-confidentialite.politique-de-confidentialite');
})->name('politique-de-confidentialite');

Route::get('product', function () {
    return view('frontend.product.product');
})->name('product');

Route::get('product-details', function () {
    return view('frontend.product-details.product-details');
})->name('product-details');

Route::get('profile', function () {
    return view('frontend.profile.profile');
})->name('profile');

Route::get('quoi-de-9', function () {
    return view('frontend.quoi-de-9.quoi-de-9');
})->name('quoi-de-9');

Route::get('shop', function () {
    return view('frontend.shop.shop');
})->name('shop');

Route::get('shop-details', function () {
    return view('frontend.shop-details.shop-details');
})->name('shop-details');

Route::get('shop-grid', function () {
    return view('frontend.shop-grid.shop-grid');
})->name('shop-grid');

Route::get('shoping-cart', function () {
    return view('frontend.shoping-cart.shoping-cart');
})->name('shoping-cart');

/*
|--------------------------------------------------------------------------
| Web Routes - Stevie-Frontend
|--------------------------------------------------------------------------
*/



Route::get('stevie-commerce-a-propos-de-nous', function () {
    return view('stevie.frontend.a-propos-de-nous.a-propos-de-nous');
})->name('stevie-a-propos-de-nous');

Route::get('stevie-commerce', function () {
    return view('stevie.frontend.blog.blog');
})->name('stevie-blog');

Route::get('stevie-checkout', function () {
    return view('stevie.frontend.checkout.checkout');
})->name('stevie-checkout');

Route::get('stevie-comment-ca-marche', function () {
    return view('stevie.frontend.comment-ca-marche.comment-ca-marche');
})->name('stevie-comment-ca-marche');

Route::get('stevie-commerce', function () {
    return view('stevie.frontend.commerce.commerce');
})->name('stevie-commerce');

Route::get('stevie-commerce-map', function () {
    return view('stevie.frontend.commerce-map.commerce-map');
})->name('stevie-commerce-map');

Route::get('stevie-commerce-page', function () {
    return view('stevie.frontend.commerce-page.commerce-page');
})->name('stevie-commerce-page');

Route::get('stevie-comming-soon', function () {
    return view('stevie.frontend.comming-soon.comming-soon');
})->name('stevie-comming-soon');

Route::get('stevie-conditions-generales-utilisation', function () {
    return view('stevie.frontend.conditions-generales-d-utilisation.conditions-generales-d-utilisation');
})->name('stevie-conditions-generales-utilisation');

Route::get('stevie-conditions-generales-utilisation-pro', function () {
    return view('stevie.frontend.conditions-generales-d-utilisation-pro.conditions-generales-d-utilisation-pro');
})->name('stevie-conditions-generales-utilisation-pro');

Route::get('stevie-conditions-generales-de-vente', function () {
    return view('stevie.frontend.conditions-generales-de-vente.conditions-generales-de-vente');
})->name('stevie-conditions-generales-de-vente');

Route::get('stevie-conditions-generales-de-vente-pro', function () {
    return view('stevie.frontend.conditions-generales-de-vente-pro.conditions-generales-de-vente-pro');
})->name('stevie-conditions-generales-de-vente-pro');

Route::get('stevie-conctact', function () {
    return view('stevie.frontend.contact.contact');
})->name('stevie-conctact');

Route::get('stevie-faq', function () {
    return view('stevie.frontend.faq.faq');
})->name('stevie-faq');

Route::get('stevie-faq-pro', function () {
    return view('stevie.frontend.faq-pro.faq-pro');
})->name('stevie-faq-pro');

Route::get('stevie-favoris', function () {
    return view('stevie.frontend.favoris.favoris');
})->name('stevie-favoris');

Route::get('stevie-index', function () {
    return view('stevie.frontend.home.home');
})->name('stevie-index');

Route::get('stevie-politique-de-confidentialite', function () {
    return view('stevie.frontend.politique-de-confidentialite.politique-de-confidentialite');
})->name('stevie-politique-de-confidentialite');

Route::get('stevie-product-details', function () {
    return view('stevie.frontend.product-details.product-details');
})->name('stevie-product-details');

Route::get('stevie-services-et-prestations', function () {
    return view('stevie.frontend.services-et-prestations.services-et-prestations');
})->name('stevie-services-et-prestations');

Route::get('stevie-shop-grid', function () {
    return view('stevie.frontend.shop-grid.shop-grid');
})->name('stevie-shop-grid');

Route::get('stevie-shopping-cart', function () {
    return view('stevie.frontend.shopping-cart.shopping-cart');
})->name('stevie-shopping-cart');

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
    Route::get('categories-commerce', [CategorieShopController::class, 'index'
    ])->name('categories-commerce');

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
});

require __DIR__ . '/auth.php';
