<?php

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
/* --- Generic Routes --- */
// inicio
Route::get('/', function () {
    return view('home');
});

//Sobre Micnoi
Route::get('/about-us', function () {
    return view('about');
});
// Home - return view home
Route::get('/home', 'HomeController@index')->name('home');

// Manage all routes Auth
Auth::routes();

//Logout User - Return Home
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');


/* --- Musician Routes --- */
//list musician
Route::get('/musician-list', 'MusicianController@index');

//Edit profile musician
Route::get('/profile-musician/{id}', 'MusicianController@edit');

//Update profile musician
Route::post('/profile-musician/update/{id}', 'MusicianController@update');

//Create musician/Fan
Route::get('/create/', 'MusicianController@create');

//Store Musician
Route::post('/musician/store', 'MusicianController@store');


/* --- Fans Routes --- */
//registro fans
Route::get('/signup-fans', function () {
    return view('fans');
});

/* --- Offers Routes --- */
//Offers List
Route::get('/offer-list', 'OfferController@index');

// Create Offer - return view form
Route::get('/create-offer/', 'OfferController@create');

//Offer Musician
Route::post('/offer/store', 'OfferController@store');

//Edit Offer
Route::get('/offer/edit/{id}', 'OfferController@edit');

//Update Offer
Route::post('/update-offer/update/{id}', 'OfferController@update');

