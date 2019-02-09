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

Route::get('/trofei', 'InfosController@getTrophy')->name('trofei');

Route::get('/chisiamo', 'InfosController@getAboutme')->name('chisiamo');

Route::get('/contatti', 'InfosController@getContact')->name('contatti');


Route::post('/comments','CommentController@commit')->name('comments');

Route::get('/profilo', 'UserController@getProfile')->name('profilo');


Route::get('/gestisciEvento','EventController@getEventByAuth')->name('gestioneEvento');

Route::post('/profilo', 'UserController@updateProfile')->name('agg_profilo');


Route::get('/gestisciEvento/{id}','EventController@setEventPublication')->name('publicPost');

Route::post('/send','InfosController@send')->name('sendMessage');
Route::post('/sendByAuth','InfosController@sendByAuth')->name('sendMessageByAuth');



Auth::routes();

