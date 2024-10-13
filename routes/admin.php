<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    AttributeController,
    CategoryController,
    CoupanController,
    CustomerController,
    DashboardController,
    OrderController,
    PermissionController,
    ProductController,
    RoleController,
    UserController
};
use App\Http\Controllers\Controller;

/*
|--------------------------------------------------------------------------
| Custome Auth Routes
|--------------------------------------------------------------------------
|
*/

// helper class generating all routes required for user authentication
// (authentication, registration and password resetting)
// Auth::routes(['verify' => true, 'register' => false]);

Route::group(['prefix' => 'admin'], function(){
    Route::get('/login', 'App\Http\Controllers\Admin\Auth\LoginController@showLoginForm')->name('login');
    Route::post('/login', 'App\Http\Controllers\Admin\Auth\LoginController@login')->name('login.post');
    Route::post('/logout', 'App\Http\Controllers\Admin\Auth\LoginController@logout')->name('logout');

    Route::group(['middleware' => 'auth'], function () {
        Route::get('/password/confirm', 'App\Http\Controllers\Admin\Auth\ConfirmPasswordController@showConfirmForm')->name('password.confirm');
        Route::post('/password/confirm', 'App\Http\Controllers\Admin\Auth\ConfirmPasswordController@confirm');
    });

    Route::post('/password/email', 'App\Http\Controllers\Admin\Auth\ForgotPasswordController@sendResetLinkEmail')->name('password.email');

    Route::get('/password/reset', 'App\Http\Controllers\Admin\Auth\ForgotPasswordController@showLinkRequestForm')->name('password.request');
    Route::post('/password/reset', 'App\Http\Controllers\Admin\Auth\ForgotPasswordController@reset')->name('password.update');
    Route::get('/password/password/reset/{token}', 'App\Http\Controllers\Admin\Auth\ResetPasswordController@showResetForm')->name('password.reset');

    Route::group(['middleware' => 'guest'], function () {
        Route::get('/password/register', 'App\Http\Controllers\Admin\Auth\RegisterController@showRegistrationForm')->name('register');
        Route::post('/password/register', 'App\Http\Controllers\Admin\Auth\RegisterController@register');
    });

    // Auth::routes();
});

Route::post('/file-upload', [Controller::class, 'storeTempFile'])->name('file.upload');

Route::middleware('auth','web')->prefix('admin')->group(function(){
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');

    Route::resource('users', UserController::class);
    Route::get('/users/{user}/change-status', [UserController::class, 'changeStatus'])->name('users.change.status');
    Route::get('/profile/{user}', [UserController::class, 'profile'])->name('users.profile');
    Route::get('/security/{user}', [UserController::class, 'changePassword'])->name('users.security');
    Route::get('/notifications/{user}', [UserController::class, 'notifications'])->name('users.notification');

    Route::resource('roles', RoleController::class);
    Route::get('/roles/{role}/change-status', [RoleController::class, 'changeStatus'])->name('roles.change.status');

    Route::resource('permissions', PermissionController::class);
    Route::get('/permissions/{permission}/change-status', [PermissionController::class, 'changeStatus'])->name('permissions.change.status');

    Route::resource('customers', CustomerController::class);
    Route::get('/customers/{customer}/change-status', [CustomerController::class, 'changeStatus'])->name('customers.change.status');

    Route::resource('categories', CategoryController::class);
    Route::get('/categories/{category}/change-status', [CategoryController::class, 'changeStatus'])->name('categories.change.status');

    Route::resource('attributes', AttributeController::class);
    Route::get('/attributes/{attribute}/change-status', [AttributeController::class, 'changeStatus'])->name('attributes.change.status');

    Route::resource('products', ProductController::class);
    Route::get('/products/{productId}/out-of-stock', [ProductController::class, 'setOutOfStock'])->name('products.outofstock');

    Route::resource('coupans', CoupanController::class);
    Route::get('/coupans/{coupans}/change-status', [CoupanController::class, 'changeStatus'])->name('coupans.change.status');

    Route::get('orders',[OrderController::class, 'index'])->name('orders.index');
    Route::get('orders/{order}',[OrderController::class, 'show'])->name('orders.show');
    Route::get('orders/{order}/change-status/{status}',[OrderController::class, 'changeStatus'])->name('orders.change.status');
});
