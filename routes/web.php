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

Auth::routes();

Route::get('/home', 'HomeController@index');

Route::resource('desarrollosocial/ciudadanos', 'CiudadanosController');
Route::get('ciudadanos/destroy/{id}', ['as' => 'ciudadanos/destroy', 'uses' => 'CiudadanosController@destroy']);
Route::post('ciudadanos/search', ['as' => 'ciudadanos/search', 'uses'=>'CiudadanosController@search']);

