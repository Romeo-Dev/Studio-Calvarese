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

Route::get('/home', 'MainController@index')->name('home');


Route::get('/eventi', function () {
    return view('eventi');
});

Route::get('/servizi', 'ServicesController@index')->name('servizi');

Route::get('/trofei', function () {
    return view('infos.trofei');
});

Route::get('/chisiamo', 'InfosController@getAboutme')->name('chisiamo');

Route::get('/contatti', 'InfosController@getContact')->name('contatti');

Route::get('/login', function () {
    return view('access.login');
});

Route::get('/registrazione', function () {
    return view('access.register');
});
