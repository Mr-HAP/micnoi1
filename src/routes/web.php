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

//list musician
Route::get('/musician-list','MusicianController@index');

//Edit profile musician
Route::get('/profile-musician/{id}', 'MusicianController@edit');

//Update profile musician
Route::post('/profile-musician/update/{id}', 'MusicianController@update');

//Create musician
Route::get('/register/', 'MusicianController@create');

//Store Musician
Route::post('store', 'MusicianController@store');


//registro fans
Route::get('/signup-fans', function () {
    return view('fans');
});

//Offers List
Route::get('/offer-list', 'OfferController@index');

//Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

//Sobre Micnoi
Route::get('/about-us', function () {
    return view('about');
});
