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
Route::get('/shop', [ShopController::class, 'index'])->name('market.shop');
Route::get('/about', [PageController::class, 'about'])->name('market.about');
Route::get('/contact', [PageController::class, 'contact'])->name('market.contact');

Route::get('/product-deatils', [ProductController::class, 'index'])->name('market.product-deatils');
Route::get('/cart', [CartController::class, 'index'])->name('market.cart');
Route::get('/checkout', [CheckoutController::class, 'index'])->name('market.checkout');

// Route::get('/dashboard', [DashboradController::class, 'index'])->name('market.dashboard');
