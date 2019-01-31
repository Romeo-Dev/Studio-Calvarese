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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return view('homepage');
});

Route::get('/eventi', function () {
    return view('eventi');
});

Route::get('/servizi', function () {
    return view('servizi');
});

Route::get('/trofei', function () {
    return view('trofei');
});

Route::get('/chisiamo', function () {
    return view('chisiamo');
});

Route::get('/contatti', function () {
    return view('contatti');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/registrazione', function () {
    return view('register');
});
