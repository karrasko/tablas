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
use App\User; 
use App\Empleados;
use App\Comment;
use App\Video; 
Route::get('/', function () {
    return view('auth.login');
});
/* Route::get('/lista', function () {
    return view('lista');
}); */




    
Auth::routes(['register'=>false]);


Route::get('/home', array(
 'as'=> 'home',
  'uses'=>'HomeController@index'
));

/* 
Route::get('/home', 'HomeController@index')->name('home')->middleware('auth'); */


/* Route::get('/index', 'UserController@index')->name('lista'); */
/* Route::resource('/lista', 'UserController'); */
Route::resource('empleados', 'UserController');

//rutas del controlador de videos

Route::get('crear-video',array(

    'as'=>'createVideo',
    'middleware'=>'auth',
    'uses'=> 'VideoController@createVideo'
));


Route::post('guardar-video',array(

    'as'=>'saveVideo',
    'middleware'=>'auth',
    'uses'=> 'VideoController@saveVideo'
));

Route::get('/miniatura/{filename}',array(

    'as' => 'imageVideo',
    'uses'=> 'VideoController@getImage'
));
Route::resource('fichajestareas', 'fichajestareasController');
Route::resource('tareas', 'tareasController');
Route::get('logintareas','Auth\LoginController@showLoginForm');
Route::post('logintareas','Auth\LoginController@showLogin');