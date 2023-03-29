<?php

use App\Http\Controllers\Admin\CategoryFilmController;
use App\Http\Controllers\Admin\UserController;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AuthController;
use App\Http\Controllers\Admin\MainController;
use App\Http\Controllers\Admin\CountryController;
use App\Http\Controllers\Admin\CategoryController;
use App\Http\Controllers\Admin\FilmController;

Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login_handler', [AuthController::class, 'login'])->name('login.handler');


Route::middleware(['auth:admin'])->group(function() {
   Route::get('/', [MainController::class, 'index'])->name('main');
   Route::get('/logout', [AuthController::class, 'logout'])->name('logout');
   Route::resource('countries', CountryController::class)->except(['show']);
   Route::resource('categories', CategoryController::class)->except(['show']);
   Route::resource('films', FilmController::class);
   Route::resource('categoryfilms', CategoryFilmController::class);
   Route::resource('users', UserController::class)->only(['index', 'destroy']);
});
