<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');
Route::get('/perfil', 'HomeController@perfil');
Route::get('/duvidas', 'HomeController@duvidas');
Route::get('/oquee', 'HomeController@oquee');
Route::get('/sobre', 'HomeController@sobre');
Route::get('/novocanvas', 'CanvasController@novocanvas');
Route::get('/salvacanvas', 'CanvasController@salvacanvas');
Route::get('/updadecanvas', 'CanvasController@updadecanvas');
Route::get('/deletecanvas', 'CanvasController@deletecanvas');
Route::post('/perfil', 'perfil@updadeAvatar');


Route::get('auth/facebook', 'Auth\RegisterController@redirectToProvider');
Route::get('auth/facebook/callback', 'Auth\RegisterController@handleProviderCallback');