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

//-----------------Route Frontend

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

Route::get('/stampe/{idst}','StampeController@getStampe')->name('stampe');
Route::post('/sendStampe','StampeController@updateByAuth')->name('sendStamp');



// -------------------------------------Route Backoffice

Route::get('/dash',function (){
   return view('dashboard.empty');
});

    //--------------------------------Rotte di Servizio by Admin
Route::get('/dash/services','ServicesController@browse')->name('serviceByAdm');
Route::get('/dash/services/{id}','ServicesController@delete')->name('deleteservice');
Route::post('/dash/services','ServicesController@store')->name('insertservice');


Route::get('/dash/comments','CommentController@browse')->name('commentsByAdmin');
Route::get('/dash/comments/{id}','CommentController@delete')->name('deletecomment');

Route::get('/dash/profiloadmin', 'UserController@getProfiloAdmin')->name('profiloadmin');
Route::post('/dash/profiloadmin', 'UserController@updateProfile')->name('agg_profiloadmin');

Route::get('/dash/services/edit/{id}','ServicesController@edit')->name('editservice');
Route::post('/dash/services','ServicesController@update')->name('updateservice');
//-------------------------------------------------------------------------------

//---------------------------------Message Dashboard
Route::get('/dash/messages','InfosController@browse')->name('messagesByAdmin');
Route::get('/dash/messages/{id}','InfosController@delete')->name('deletemessage');


//--------------------------------Categorie Dashboard

Route::get('/dash/categories','CategoryController@index')->name('categoryByAdm');
Route::post('/dash/categories','CategoryController@store')->name('storecat');
Route::get('/dash/categories/{id}','CategoryController@destroy')->name('deletecat');
Route::get('/dash/categories/edit/{id}','CategoryController@edit')->name('editcat');
Route::post('/dash/categories/update','CategoryController@update')->name('updatecat');

//---------------------------------Trofei Dashboard
Route::get('/dash/trophies','InfosController@getTrophyByAdmin')->name('trophyByAdmin');
Route::get('/dash/trophies/{id}/{trofeo}','InfosController@deleteTrophy')->name('deletetrophy');
Route::post('/dash/trophies','InfosController@storeTrophy')->name('insertrophy');
Route::get('/dash/tropheis/edit/{id}','InfosController@editTrophy')->name('editTrophy');
Route::post('/dash/trophies/update','InfosController@update')->name('updateTrophy');


Auth::routes();

