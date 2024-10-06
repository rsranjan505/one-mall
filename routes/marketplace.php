<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Marketplace\{
    CartController,
    CheckoutController,
    HomeController,
    PageController,
    ProductController,
    ShopController
};
use App\Http\Controllers\Marketplace\Customer\DashboradController;

Route::get('/home', [HomeController::class, 'index'])->name('market.home');

Route::get('/about', [PageController::class, 'about'])->name('market.about');
Route::get('/contact', [PageController::class, 'contact'])->name('market.contact');

// Route::get('/product-deatils', [ProductController::class, 'index'])->name('market.product-deatils');
Route::get('/product-deatils/{product_id}', [ProductController::class, 'productDetails'])->name('market.product-deatils');
Route::get('/shop/{category?}/{sub_category?}', [ShopController::class, 'index'])->name('market.shop');

Route::get('/cart', [CartController::class, 'index'])->name('market.cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('market.checkout');


Route::post('/add-to-cart', [CartController::class, 'addtocart'])->name('market.addtocart');
Route::post('/update-quantity-cart', [CartController::class, 'updateQuantity'])->name('market.cart.update-quantity');
Route::post('/remove-cart-item', [CartController::class, 'removeCartItem'])->name('market.cart.remove');
Route::post('/checkout', [CheckoutController::class, 'checkout'])->name('market.cart.checkout');


// Route::get('/dashboard', [DashboradController::class, 'index'])->name('market.dashboard');
