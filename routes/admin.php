<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CategoryController;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login_handler', [AuthController::class, 'login'])->name('login.handler');


Route::middleware(['auth:admin'])->group(function() {
   Route::get('/', [MainController::class, 'index'])->name('main');
   Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
   Route::resource('countries', CountryController::class)->except(['show']);
    Route::resource('categories', CategoryController::class)->except(['show']);
});
