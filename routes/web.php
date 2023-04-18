<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;

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

Route::get('/', function () {
    return view('home');
})->name('home');


Route::group(['prefix' => 'services'], function (){
    Route::get('/conseil',function (){ return view('Services.conseil'); })->name('services.conseil');
    Route::get('/transformation',function (){ return view('Services.transformation'); })->name('services.transformation');
    Route::get('/logiciel',function (){ return view('Services.logiciel'); })->name('services.logiciel');
    Route::get('/web',function (){ return view('Services.web'); })->name('services.web');
    Route::get('/digitale',function (){ return view('Services.digital'); })->name('services.digital');
    Route::get('/infographie',function (){ return view('Services.infographe'); })->name('services.infographe');

});


Route::group(['prefix' => 'solutions'], function (){
    Route::get('/ERP',function (){ return view('Solutions.integre'); })->name('solutions.erp');
    Route::get('/billets',function (){ return view('Solutions.billets'); })->name('solutions.billets');
});

Route::get('/fonctionnalités', function () {
    return view('main_features');
})->name('main');

Route::get('/additional', function () {
    return view('additional_features');
})->name('additional');

Route::get('/about', function () {
    return view('about');
})->name('about');

Route::get('/contact', function () {
    $countries=\App\Models\Country::get();
    return view('contact',compact('countries'));
})->name('contact');

Route::get('/rendez-vous', function () {
    $countries=\App\Models\Country::all();
    return view('rendez-vous',compact('countries'));
})->name('rendez-vous');

/*Route::get('/contact', function () {
    return view('contact');
})->name('contact');*/

Route::post('/contact/' ,[ContactController::class, 'store_contact'])->name('contact.store');
Route::post('/estimate/' ,[ContactController::class, 'store_estimate'])->name('estimate.store');
Route::post('/rendez-vous/' ,[ContactController::class, 'store_date'])->name('date.store');

