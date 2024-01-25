<?php

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

Route::get('/', function () {
    return view('book-list');
});
Route::get('/login', function () {
    return view('login');
})->name('login');
Route::get('/signup', function () {
    return view('signup');
})->name('register');
Route::get('/logout', function () {
    auth()->logout();
        // redirect to homepage
        return redirect('/login');
})->name('logout');
Route::get('/cart-detail', function () {
    return view('cart-detail');
})->name('cart-detail');

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard', function () {
        return view('user-dashboard');
    })->name('dashboard');
});

Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});
