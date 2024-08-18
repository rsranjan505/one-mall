<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    DashboardController
};


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
    Route::post('/login', 'App\Http\Controllers\Admin\Auth\LoginController@login');
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


// Route::middleware('auth','web')->prefix('admin')->group(function(){
    Route::get('/admin/dashboard', [DashboardController::class, 'index'])->name('admin.dashboard');
// });
