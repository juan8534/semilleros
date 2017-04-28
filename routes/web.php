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

//Rutas de usuarios
Route::resource('users','UsersController');
Route::get('users/{id}/destroy',[
      'uses' => 'UsersController@destroy',
      'as' => 'users.destroy'
]);
//Rutas para la autenticación de usuarios
Auth::routes();
Route::get('logout',  ['as' => 'logout', 'uses' =>  '\App\Http\Controllers\Auth\LoginController@logout']);
Route::get('/admin', 'HomeController@index');
Auth::routes();

// Controlador de sesiones metodo index
Route::get('/home', 'HomeController@index');

// Rutas controlador de docuementos
Route::resource('documents','DocumentsController');

//Ruta de archivos controlador de formatos
Route::resource('formats','FormatsController');

//Ruta de las noticias
Route::resource('news', 'NewsController');

//Ruta de los Semilleros
Route::resource('semilleros', 'SemillerosController');

//Ruta de los grupos
Route::resource('groups', 'GroupsController');

//Ruta de las hojas de vida
Route::resource('curriculums', 'CurriculumsController');
