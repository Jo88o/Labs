<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeLController;
use App\Models\HomeL;

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


// route pages //
Route::get('/', function(){
    $datas = HomeL::all();
    return view('pages.home', compact('datas'));
});

Route::resource('/homeL', HomeLController::class);

Route::get('/homeLE/editimg', function (){
    $datas = HomeL::all();
    return view ('backend.homeBB', compact('datas'));
})->name('homeL.editimg');


Route::post('/homeLU/updateimg/{id}', [HomeLController::class, 'updateImg'])->name('homeL.updateimg');




// Route::get('/homeL/updateimg', function(){
//     return view ('pages.home');
// })->name('homeL.updateimg');

// Route::resource('/service', Service::class);
// Route::resource('/blog', Blog::class);
// Route::resource('/blog-post', BlogP::class);
// Route::resource('/contact', Contact::class);
// Route::resource('/elements', Element::class);





//routes pages //
// Route::get('/', function () {
//     return view('pages.home');
// });
// Route::get('/services', function () {
//     return view('pages.services');
// });
// Route::get('/home', function () {
//     return view('pages.home');
// });
// Route::get('/elements', function () {
//     return view('pages.elements');
// });
// Route::get('/contact', function () {
//     return view('pages.contact');
// });
// Route::get('/blog', function () {
//     return view('pages.blog');
// });
// Route::get('/blog-post', function () {
//     return view('pages.blog-post');
// });


