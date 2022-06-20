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

// app 2
Route::get('/welcome', function () {
    return view('pages.home2');
})->name('home2');


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
// Route::get('/welcome', function () {
//     return view('pages.login');
// })->name('login');

//Docs

Route::get('/documentation', function () {
    return view('pages.docs.introduction');
})->name('introduction');
Route::get('/installation', function () {
    return view('pages.docs.installation');
})->name('installation');
