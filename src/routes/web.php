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


//registro musician
Route::get('/signup-musician', function () {
    return view('musician');
});

//registro fans
Route::get('/signup-fans', function () {
    return view('fans');
});

//Sobre Micnoi
Route::get('/about-us', function () {
    return view('about');
});

//Listado de anuncios y musicxs
Route::get('/musician-list', function () {
    return view('musician-list');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
