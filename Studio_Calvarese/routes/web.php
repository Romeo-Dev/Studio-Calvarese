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




Route::post('/send','InfosController@send')->name('sendMessage');
Route::post('/sendByAuth','InfosController@sendByAuth')->name('sendMessageByAuth');

Route::get('/stampe/{idst}','StampeController@getStampe')->name('stampe');
Route::post('/sendStampe','StampeController@updateByAuth')->name('sendStamp');


/*Route::get('/gestisciPrenotazioni',function (){
    return view('services.prenotazioni');
});*/

Route::get('/gestisciPrenotazioni','PrenotationController@getPrenotation')->name('gestionePrenotazioni');
Route::post('/gestisciPrenotazioni','PrenotationController@store')->name('askforPrenotation');

// -------------------------------------Route Backoffice

Route::get('/dash/home',function (){
   return view('dashboard.homedash');
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



//---------------------------------Gestisci eventi by user
Route::get('/dash/users','UserController@getUsersByAdmin')->name('usersByAdmin');
Route::get('/dash/users/{id}','UserController@getEventsByUser')->name('eventsByUser');
Route::get('/dash/users/{id}/{titolo}','UserController@getGestione')->name('gestEvent');
Route::post('/dash/users','UserController@uploadImp')->name('uploadimp');




//-----------------------------Generate Event

Route::get('/dash/events','EventController@getEventsByAdmin')->name('eventsByAdmin');
Route::get('/dash/events/edit/{id}','EventController@editEvent')->name('editEvent');
Route::post('/dash/events','EventController@insertEvent')->name('insertevent');
Route::post('/dash/events/update','EventController@updateEvent')->name('updatevent');
Route::get('/dash/events/{id}','EventController@deletePublishedEvent')->name('deleteEventsByAdmin');
Route::get('/dash/event/{id}','EventController@setEventPublication')->name('publicPost');
Route::get('/dash/pevent/{id}','EventController@setPrivateEvent')->name('privatePost');


Route::post('/dash/events/editimages/','EventController@addPresentationImages')->name('updateimportantimages');
Route::post('/dash/events/edit/gallery','EventController@addGallery')->name('insertGallery');

//-----------------------------Infos Dash
Route::get('/dash/about','InfosController@editAbout')->name('about');
Route::post('/dash/about/update','InfosController@updateAboutUs')->name('updateAbout');
Route::get('/dash/contatti','InfosController@editContact')->name('contact');
Route::post('/dash/contatti/update','InfosController@updateContact')->name('updateContact');

//----------------------------Home Dash
Route::get('/dash/home','HomeController@index')->name('homedash');
Route::post('/dash/home/update','HomeController@updateHome')->name('updateHome');

//----------------------------Prenotation Dash
Route::get('/dash/prenotations','PrenotationController@browse')->name('prenotationdash');
Route::get('/dash/prenotations/edit/{id}','PrenotationController@updatePrenotation')->name('editPrenotation');
Auth::routes();

