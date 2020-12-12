<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Auth;
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
Auth::routes();

Route::resource('/genders', 'GenderController');
Route::resource('/brand', 'BrandController');
Route::resource('/calibertype', 'CaliberTypeController');
Route::resource('/category', 'CategoryController');
Route::resource('/cities', 'CityController');
Route::resource('/products', 'ProductController');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/customer', function () {
    return view('customer');
})->name('customer');

Route::get('/404', function () {
    return view('404');
})->name('404');

Route::get('/shop', function () {
    return view('shop');
})->name('shop');

Route::get('/contact', function () {
    return view('contact');
})->name('contact');

Route::get('/single', function () {
    return view('single');
})->name('single');

Route::get('/payment', function () {
    return view('payment');
})->name('payment');

Route::get('/checkout', function () {
    return view('checkout');
})->name('checkout');

Route::get('/admin', 'AdminController@index')->name('admin');

Route::get('/profile', function () {
    return view('profile');
})->name('profile');
