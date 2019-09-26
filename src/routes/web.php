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

// inicio
Route::get('/', function () {
    return view('home');
});
// Home - return view home
Route::get('/home', 'HomeController@index')->name('home');

//Sobre Micnoi
Route::get('/about-us', function () {
    return view('about');
});

// Manage all routes Auth
Auth::routes();

//Logout User - Return Home
Route::get('logout', 'LoginController@logout');


/* --- Fans Routes --- */
//registro fans
Route::get('/signup-fans', function () {
    return view('fans');
});

//list musician
Route::get('/musician-list', 'MusicianController@index');
//Offers List
//Route::get('/offer-list', 'OfferController@index');
Route::get('/offer-list/{stateid?}/{countryid?}', 'OfferController@index');



Route::group(
    [
        'middleware' => ['role:musico'],
    ],
    function (){
        //Edit profile musician, Return View
        Route::get('/profile-musician/{id}', 'MusicianController@edit');
        //Update profile musician
        Route::post('/profile-musician/update/{id}', 'MusicianController@update');
        //Create musician, Return View
        Route::get('/create/', 'MusicianController@create');
        //Store Musician
        Route::post('/musician/store', 'MusicianController@store');

        // Create Offer, return view
        Route::get('/create-offer/', 'OfferController@create');
        //Offer Musician
        Route::post('/offer/store', 'OfferController@store');
        //Edit Offer, Return View
        Route::get('/offer/edit/{id}', 'OfferController@edit');
        //Update Offer
        Route::post('/update-offer/update/{id}', 'OfferController@update');
        //Return myOffers
        Route::get('/my-offers', 'OfferController@showById');
    }
);
