<?php

use App\Http\Controllers\ContactController;
use App\Http\Controllers\ContactMapController;
use App\Http\Controllers\HomeIController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeLController;
use App\Http\Controllers\HomePController;
use App\Http\Controllers\HomeRController;
use App\Http\Controllers\HomeServiceController;
use App\Http\Controllers\HomeVController;
use App\Http\Controllers\HomeTController;
use App\Http\Controllers\HomeTeamController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\ServiceSPController;
use App\Http\Controllers\TitreController;
use App\Models\HomeT;
use App\Models\HomeV;
use App\Models\HomeL;
use App\Models\HomeP;
use App\Models\HomeS;
use App\Models\Caroussel;
use App\Models\HomeI;
use App\Models\HomeR;
use App\Models\HomeService;
use App\Models\HomeTeam;
use App\Models\Service;
use App\Models\ServiceSP;
use App\Models\Titre;

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


// route page de base home //
Route::get('/', function(){
    $datas = HomeL::all();
    $caroussel = Caroussel::all();
    $presentation = homeP::all();
    $serviceRandom = homeS::all()->random(3);
    $video = HomeV::all();
    $testimonial = HomeT::all();
    $service = HomeService::orderBy("id", "desc")->paginate(9);
    $team = HomeTeam::all()->random(3);
    $ready = HomeR::all();
    $info = HomeI::all(); 
    $titre = Titre::all();
    return view('pages.home', compact('datas', 'caroussel', 'presentation', 'serviceRandom', 'video', 'testimonial', 'service', 'team', 'ready', 'info', 'titre'));
});

// route home // 
Route::resource('/homeL', HomeLController::class);

Route::get('/homeLE/editimg', function (){
    $datas = HomeL::all();
    $caroussel = Caroussel::all();
    return view ('backend.homeBB', compact('datas', 'caroussel'));
})->name('homeL.editimg');

Route::post('/homeLU/updateimg/{id}', [HomeLController::class, 'updateImg'])->name('homeL.updateimg');


Route::get('/homeLE/{id}', function (){
    $datas = HomeL::all();
    $caroussel = Caroussel::all();
    $edit = Caroussel::all();
    return view ('backend.homeCB', compact('datas', 'caroussel', 'edit'));
})->name('homeL.editcarou');

Route::post('/homeLU/updatecarou/{id}', [HomeLController::class, 'updateCarou'])->name('homeL.updatecaroou');


Route::resource('/homeP', HomePController::class);
Route::resource('/homeV', HomeVController::class);
Route::resource('/homeT', HomeTController::class);
Route::resource('/homeTitre', TitreController::class);
Route::resource('/homeService', HomeServiceController::class);
Route::resource('/homeTeam', HomeTeamController::class);
Route::resource('/homeR', HomeRController::class);
Route::resource('/homeI', HomeIController::class); 

// route service //

Route::resource('/services', ServiceController::class);
Route::resource('/servicesSPB', ServiceSPController::class);


// route contact //

Route::resource('/contact', ContactController::class);
Route::resource('/contactMB', ContactMapController::class);






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


