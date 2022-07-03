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
// app
Route::get('/', function () {
    return view('pages.home');
})->name('home');

Route::get('/feature', function () {
    return view('pages.feature');
})->name('feature');

Route::get('/showcase', function () {
    return view('pages.showcase');
})->name('showcase');

Route::get('/pricing', function () {
    return view('pages.pricing');
})->name('pricing');

Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');
Route::get('/marketplace', function () {
    return view('pages.marketplace');
})->name('marketplace');
Route::get('/login', function () {
    return view('pages.login');
})->name('login');
Route::get('/contact', function () {
    return view('pages.contact');
})->name('contact');


//Docs

Route::get('/documentation', function () {
    return view('pages.docs.introduction');
})->name('introduction');
Route::get('/installation', function () {
    return view('pages.docs.installation');
})->name('installation');


// app 2.  users_pages
Route::get('/user/welcome', function () {
    return view('user_pages.home');
})->name('home2');
Route::get('/user/product', function () {
    return view('user_pages.menu.product');
})->name('product');
Route::get('/user/showcase', function () {
    return view('user_pages.showcase');
})->name('user_showcase');
Route::get('/user/pricing', function () {
    return view('user_pages.pricing');
})->name('user_pricing');
Route::get('/user/marketplace', function () {
    return view('user_pages.marketplace');
})->name('user_marketplace');
Route::get('/user/account', function () {
    return view('user_pages.account');
})->name('user_account');
//Docs

Route::get('/user/documentation', function () {
    return view('user_pages.docs.introduction');
})->name('user_introduction');
Route::get('/user/installation', function () {
    return view('user_pages.docs.installation');
})->name('user_installation');
