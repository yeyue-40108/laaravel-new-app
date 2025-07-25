<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\LogoutController;
use App\Http\Controllers\WebController;
use App\Http\Controllers\WeatherController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/web', [WebController::class, 'index'])->name('top');

Route::get('register', [RegisterController::class, 'showRegistrationForm'])->name('register')->middleware('guest');
Route::post('register', [RegisterController::class, 'register']);

Route::get('login', [LoginController::class, 'showLoginForm'])->middleware('guest')->name('login');
Route::post('login', [LoginController::class, 'login']);

// 一覧ページは非会員でも閲覧できる
Route::get('/posts', [PostController::class, 'index'])->name('posts.index');
Route::get('/weather', [WeatherController::class, 'index'])->name('weather.index');

// 会員のみ
Route::middleware('auth')->group(function() {
    Route::post('logout', [LogoutController::class, 'logout'])->name('logout');

    Route::controller(PostController::class)->group(function() {
        Route::get('/posts/own', 'own')->name('posts.own');
        Route::post('/posts/store', 'store')->name('posts.store');
    });

    Route::controller(UserController::class)->group(function() {
        Route::get('/users/mypage', 'mypage')->name('users.mypage');
        Route::get('/users/edit', 'edit')->name('users.edit');
        Route::put('/users/update', 'update')->name('users.update');
        Route::get('/users/edit_password', 'edit_password')->name('users.edit_password');
        Route::put('/users/update_password', 'update_password')->name('users.update_password');
        Route::delete('/users/destroy', 'destroy')->name('users.destroy');
    });
});