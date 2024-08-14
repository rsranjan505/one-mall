<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\{
    DashboardController
};

Route::middleware('auth','web')->prefix('admin')->group(function(){
    Route::get('/dasboard', [DashboardController::class, 'index'])->name('dasboard');
});
