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

Auth::routes();
Route::get('/', 'HomeController@index');
Route::get('/logout', 'Auth\LoginController@logout');
Route::get('/competence', 'CompetenceController@index');
Route::get('/formation', 'formationController@index');
Route::get('/projet', 'ProjetController@index');
Route::get('/page404', 'Page404Controller@index');
Route::get('/contact', 'ContactController@index');
