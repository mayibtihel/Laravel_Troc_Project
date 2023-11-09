<?php

use App\Http\Controllers\ServiceController;
use \App\Http\Controllers\CategoryProductController;
use \App\Http\Controllers\ReclamationController;
use App\Http\Controllers\ProductController ;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\CartController;
use App\Http\Controllers\GeneratePdfController;
use App\Http\Controllers\DeliveryAgentController;
use App\Http\Controllers\DeliveryController;

use Illuminate\Support\Facades\Route;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//route controlleur routes
Route::get('/services/{idcategory?}', [ServiceController::class, 'index'])->name('allservicefront');
Route::get('/admin/services', [ServiceController::class, 'listServiceback'])->name('service.list');
Route::delete('/service/remove/{id}', [ServiceController::class, 'destroy'])->name('service.remove');
Route::get('/ajouterService', [ServiceController::class, 'create'])->name('service.create')->middleware('auth');
Route::post('/storeService', [ServiceController::class, 'store'])->name('service.store')->middleware('auth');


Route::get('/service/{idservice}', [ServiceController::class, 'singleService']);
Route::get('/servicedashboard/{idServiceProvider}', [ServiceController::class, 'serviceProviderDashboard'])->name('servicedashboard');

Route::get('/products', [ProductController::class, 'index']);
//Route::post('/add-to-cart/{product}', [CartController::class, 'index'])->name('cart.add');


// route for order in admin dashboard
Route::get('admin/order-list', [OrderController::class, 'index']);
///

// cart routes
Route::post('/cart/add/{product}', [CartController::class,'addProduct'])->name('cart.add');
Route::post('/cart/remove/{cart}/{product}',  [CartController::class,'removeProductFromCart'])->name('cart.remove');
Route::get('/cart', [CartController::class, 'showCart'])->name('cart.show');
Route::delete('/cart/remove-all/{cart}', [CartController::class, 'removeAllProductsFromCart'])->name('cart.clear');


//__start__product_routes__


Route::resource('products', ProductController::class)->middleware('auth');



Route::get('admin/new_product', [ProductController::class, 'admin_create'])->name('products.add')->middleware('auth');
Route::post('product', [ProductController::class, 'admin_store'])->name('products.adminst')->middleware('auth');
Route::get('admin/products', [ProductController::class, 'index'])->name('products.adminlist')->middleware('auth');
Route::delete('/product/remove_prod/{id}', [ProductController::class, 'removeByAdmin'])->name('product.remove')->middleware('auth');




Route::get('/products_add', [ProductController::class, 'create'])->name('add.prod')->middleware('auth');
Route::get('/products', [ProductController::class, 'prod_list'])->name('products.list')->middleware('auth');
Route::get('/products/{id}', [ProductController::class, 'show'])->name('products.getSingleProduct')->middleware('auth');


Route::get('products/{id}/edit', 'ProductController@edit')->name('products.edit')->middleware('auth');
Route::put('products/{id}', 'ProductController@update')->name('products.update')->middleware('auth');
Route::delete('/product/remove/{id}', [ProductController::class, 'destroy'])->name('product.clear')->middleware('auth');

//__end__product_routes__



//__start__categoryproduct_routes__

Route::resource('category', CategoryProductController::class)->middleware('auth');

Route::get('admin/category', [CategoryProductController::class, 'index'])->name('categories.products')->middleware('auth');


Route::get('admin/prod_category', [CategoryProductController::class, 'create_category'])->name('categories.prod')->middleware('auth');

Route::get('admin/new_category', [CategoryProductController::class, 'create'])->name('categories.add')->middleware('auth');
Route::post('category', [CategoryProductController::class, 'store'])->name('category.adminst')->middleware('auth');


Route::get('category/{id}/edit', 'CategoryProductControllerr@edit')->name('categories.edit')->middleware('auth');
Route::put('category/{id}', 'CategoryProductController@update')->name('categories.update')->middleware('auth');
Route::delete('/category/remove/{id}', [CategoryProductController::class, 'destroy'])->name('category.clear')->middleware('auth');


//__end__categoryproduct_routes__

//__start__reclamation__routes__

Route::get('reclamation', [ReclamationController:: class, 'index'])->name('list.reclamations')->middleware('auth');


Route::get('my_reclamation/{id}', [ReclamationController:: class, 'showReclamation'])->name('list.myreclamations')->middleware('auth');

Route::get('reclamations', [ReclamationController::class, 'create'])->name('reclamation.add')->middleware('auth');

Route::post('/new_reclamation', [ReclamationController::class, 'store'])->name('reclamations.store')->middleware('auth');


Route::delete('/reclamation/remove/{id}', [ReclamationController::class, 'destroy'])->name('reclamation.clear')->middleware('auth');


//__end__reclamation__routes__








Route::get('/get-csrf-token', function () {
    return response()->json(['csrf_token' => csrf_token()]);
});

////order routes frontoffice
Route::post('/place-order/{product}/{cart}',  [OrderController::class, 'placeOrder'])->name('place.order');
Route::delete('/orders/delete/{order}', [OrderController::class, 'deleteOrderByAdmin'])->name('orders.deleteOrderByAdmin');
Route::get('/orders_details/{order}', [OrderController::class, 'showOrderDetails'])->name('orders.show');

Route::get('/get-order-details/{orderId}', [OrderController::class,'getOrderDetails'])->name('order.details');;
Route::get('/order/change-status/{id}/{status}', [OrderController::class,'changeStatus'])->name('order.changeStatus');
Route::get('/download-order-pdf/{orderId}', [GeneratePdfController::class,'downloadOrderPdf']);
Route::get('/test-pdf-generation/{orderId}', [GeneratePdfController::class,'testPdfGeneration']);
Route::get('/preview-order-pdf/{orderId}', [GeneratePdfController::class,'previewOrderPdf'])->name('preview-order-pdf');;



////deliveryy
Route::get('/delivery-agents/create', [DeliveryAgentController::class, 'create'])->name('delivery-agents.create');
Route::Post('/delivery-agents/store', [DeliveryAgentController::class, 'store'])->name('delivery-agents.store');

Route::get('admin/deliveryagent', [DeliveryAgentController::class, 'index'])->name('delivery-agents.list');;
Route::put('/delivery-agents/{deliveryAgent}', [DeliveryAgentController::class, 'update'])->name('delivery-agents.update');
Route::get('/delivery-agents/{deliveryAgent}/edit', [DeliveryAgentController::class, 'edit'])->name('delivery-agents.edit');
Route::delete('/delivery-agents/{deliveryAgent}', [DeliveryAgentController::class, 'destroy'])->name('delivery-agents.destroy');
Route::post('create-reservation',  [DeliveryController::class, 'createDelivery'])->name('create-delivery');
Route::get('admin/delivery',  [DeliveryController::class, 'index'])->name('deliveries.index');
Route::delete('/delivery/{delivery}', [DeliveryController::class, 'destroy'])->name('delivery.destroy');


//route front
Route::get('/index', function () {
    return view('front/index');
});
Route::get('/', function () {
    return view('front/index');
});

Route::get('/blog-category-big', function () {
    return view('front/blog-category-big');
});

Route::get('/blog-category-fullwidth', function () {
    return view('front/blog-category-fullwidth');
});
Route::get('/vendors-list', function () {
    return view('front/vendors-list');
});
Route::get('/blog-category-grid', function () {
    return view('front/blog-category-grid');
});

Route::get('/blog-category-list', function () {
    return view('front/blog-category-list');
});

Route::get('/blog-post-fullwidth', function () {
    return view('front/blog-post-fullwidth');
});

Route::get('/author', function () {
    return view('front/author');
});
Route::get('/blog-post-left', function () {
    return view('front/blog-post-left');
});
Route::get('/blog-post-right', function () {
    return view('front/blog-post-right');
});
Route::get('/page-404', function () {
    return view('front/page-404');
});
Route::get('/page-about-2', function () {
    return view('front/page-about-2');
});
Route::get('/page-account', function () {
    return view('front/page-account');
});
Route::get('/page-contact', function () {
    return view('front/page-contact');
});
Route::get('/page-forgot-password', function () {
    return view('front/page-forgot-password');
});
Route::get('/page-login', function () {
    return view('front/page-login');
});
Route::get('/page-privacy-policy', function () {
    return view('front/page-privacy-policy');
});
Route::get('/page-purchase-guide', function () {
    return view('front/page-purchase-guide');
});
Route::get('/page-register', function () {
    return view('front/page-register');
});
Route::get('/page-reset-password', function () {
    return view('front/page-reset-password');
});
Route::get('/page-terms', function () {
    return view('front/page-terms');
});
Route::get('/shop-cart', function () {
    return view('front/shop-cart');
});
Route::get('/shop-checkout', function () {
    return view('front/shop-checkout');
});
Route::get('/shop-compare', function () {
    return view('front/shop-compare');
});
Route::get('/shop-filter', function () {
    return view('front/shop-filter');
});
Route::get('/shop-fullwidth', function () {
    return view('front/shop-fullwidth');
});
Route::get('/shop-grid-left', function () {
    return view('front/shop-grid-left');
});
Route::get('/shop-grid-right', function () {
    return view('front/shop-grid-right');
});
Route::get('/shop-invoice-1', function () {
    return view('front/shop-invoice-1');
});
Route::get('/shop-list-left', function () {
    return view('front/shop-list-left');
});
Route::get('/shop-list-right', function () {
    return view('front/shop-list-right');
});
Route::get('/shop-product-full', function () {
    return view('front/shop-product-full');
});
Route::get('/shop-product-left', function () {
    return view('front/shop-product-left');
});
Route::get('/shop-product-right', function () {
    return view('front/shop-product-right');
});
Route::get('/shop-product-vendor', function () {
    return view('front/shop-product-vendor');
});
Route::get('/shop-wishlist', function () {
    return view('front/shop-wishlist');
});
Route::get('/vendor-dashboard', function () {
    return view('front/vendor-dashboard');
});
Route::get('/vendor-details-1', function () {
    return view('front/vendor-details-1');
});

Route::get('/vendor-details-2', function () {
    return view('front/vendor-details-2');
});

Route::get('/vendor-guide', function () {
    return view('front/vendor-guide');
});

Route::get('/vendors-grid', function () {
    return view('front/vendors-grid');
});
Route::get('/page-404', function () {
    return view('front/page-404');
});

Route::get('/page-404', function () {
    return view('front/page-404');
});

//route back
Route::get('admin/', function () {
    return view('back/index');
});
Route::get('admin/index', function () {
    return view('back/index');
});

Route::get('admin/add-new-attributes', function () {
    return view('back/add-new-attributes');
});
Route::get('admin/all-users', function () {
    return view('back/all-users');
});
Route::get('admin/add-new-category', function () {
    return view('back/add-new-category');
});
Route::get('admin/add-new-product', function () {
    return view('back/add-new-product');
});
Route::get('admin/add-new-user', function () {
    return view('back/add-new-user');
});
Route::get('admin/all-users', function () {
    return view('back/all-users');
});
Route::get('admin/attributes', function () {
    return view('back/attributes');
});
/*Route::get('admin/category', function () {
    return view('back/category');
});*/
Route::get('admin/coupon-list', function () {
    return view('back/coupon-list');
});
Route::get('admin/create-coupon', function () {
    return view('back/create-coupon');
});
Route::get('admin/create-role', function () {
    return view('back/create-role');
});
Route::get('admin/currency-rates', function () {
    return view('back/currency-rates');
});
Route::get('admin/list-page', function () {
    return view('back/list-page');
});
Route::get('admin/media', function () {
    return view('back/media');
});
Route::get('admin/order-detail', function () {
    return view('back/order-detail');
});
// Route::get('admin/order-list', function () {
//     return view('back/order-list');
// });
Route::get('admin/order-tracking', function () {
    return view('back/order-tracking');
});
Route::get('admin/product-review', function () {
    return view('back/product-review');
});
/*Route::get('admin/products', function () {
    return view('back/products');*/
/*});*/
Route::get('admin/profile-setting', function () {
    return view('back/profile-setting');
});
Route::get('admin/reports', function () {
    return view('back/reports');
});
Route::get('admin/role', function () {
    return view('back/role');
});
Route::get('admin/support-ticket', function () {
    return view('back/support-ticket');
});
Route::get('admin/taxes', function () {
    return view('back/taxes');
});
Route::get('admin/translation', function () {
    return view('back/translation');
});


Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/index', function () {
        return view('front/index');
    })->name('index');
});

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
