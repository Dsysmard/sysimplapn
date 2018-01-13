<?php

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index');

/*----------------------------------------------------Rutas de Desarrollo Economico.---------------------------------------------------------------*/

/* --------------------------------CRUD para registrar ciudadanos---------------------------------------------*/
Route::resource('desarrollosocial/ciudadanos', 'CiudadanosController');
Route::get('ciudadanos/destroy/{id}', ['as' => 'ciudadanos/destroy', 'uses' => 'CiudadanosController@destroy']);
Route::post('ciudadanos/search', ['as' => 'ciudadanos/search', 'uses'=>'CiudadanosController@search']);
/*------------------------------------------------------------------------------------------------------------*/

/* --------------------------------CRUD para registrar ciudadanos---------------------------------------------*/
Route::resource('desarrollosocial/estados', 'EstadosController');
Route::get('estados/destroy/{id}', ['as' => 'estados/destroy', 'uses' => 'EstadosController@destroy']);
Route::post('estados/search', ['as' => 'estados/search', 'uses'=>'EstadosController@search']);
/*------------------------------------------------------------------------------------------------------------*/
