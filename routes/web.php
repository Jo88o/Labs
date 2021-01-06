<?php

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

// routes adminlte //
Auth::routes();

Route::get('/home', function() {
    return view('home');
})->name('home')->middleware('auth');


// routes pages //
Route::get('/', function () {
    return view('pages.home');
});
Route::get('/services', function () {
    return view('pages.services');
});
Route::get('/home', function () {
    return view('pages.home');
});
Route::get('/elements', function () {
    return view('pages.elements');
});
Route::get('/contact', function () {
    return view('pages.contact');
});
Route::get('/blog', function () {
    return view('pages.blog');
});
Route::get('/blog-post', function () {
    return view('pages.blog-post');
});


