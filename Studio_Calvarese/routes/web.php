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

Route::get('/', 'MainController@index')->name('home');

Route::get('/home', 'MainController@index')->name('home');

Route::get('/eventi/{categoria}', 'EventController@getCategory')->name('event');

Route::get('/servizi', 'ServicesController@index')->name('servizi');

Route::get('/posts/{id}','PostController@getPost')->name('posts');

Route::get('/chisiamo', 'InfosController@getAboutme')->name('chisiamo');

Route::get('/contatti', 'InfosController@getContact')->name('contatti');

Route::get('/login', 'LoginController@getLogin')->name('login');

Route::get('/registrazione', 'RegisterController@getRegistration')->name('registrazione');
