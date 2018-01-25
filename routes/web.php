
<?php
use Illuminate\Support\Facades\Input;
use App\Estado as Estado;

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

/* --------------------------------CRUD para registrar estados---------------------------------------------*/
Route::resource('desarrollosocial/estados', 'EstadosController');
Route::get('estados/destroy/{id}', ['as' => 'estados/destroy', 'uses' => 'EstadosController@destroy']);
Route::post('estados/search', ['as' => 'estados/search', 'uses'=>'EstadosController@search']);
/*------------------------------------------------------------------------------------------------------------*/

/* --------------------------------CRUD para registrar municipios---------------------------------------------*/
Route::resource('desarrollosocial/municipios', 'MunicipiosController');
Route::get('municipios/destroy/{id}', ['as' => 'municipios/destroy', 'uses' => 'MunicipiosController@destroy']);
Route::post('municipios/search', ['as' => 'municipios/search', 'uses'=>'MunicipiosController@search']);
/*------------------------------------------------------------------------------------------------------------*/

/* --------------------------------CRUD para registrar secciones---------------------------------------------*/
Route::resource('desarrollosocial/secciones', 'SeccionesController');
Route::get('secciones/destroy/{id}', ['as' => 'secciones/destroy', 'uses' => 'SeccionesController@destroy']);
Route::post('secciones/search', ['as' => 'secciones/search', 'uses'=>'SeccionesController@search']);
/*------------------------------------------------------------------------------------------------------------*/

/* --------------------------------CRUD para registrar localidades---------------------------------------------*/
Route::resource('desarrollosocial/localidades', 'LocalidadesController');
Route::get('localidades/destroy/{id}', ['as' => 'localidades/destroy', 'uses' => 'LocalidadesController@destroy']);
Route::post('localidades/search', ['as' => 'localidades/search', 'uses'=>'LocalidadesController@search']);
/*------------------------------------------------------------------------------------------------------------*/

/* --------------------------------CRUD para registrar apoyos---------------------------------------------*/
Route::resource('desarrollosocial/apoyos', 'ApoyosController');
Route::get('apoyos/destroy/{id}', ['as' => 'apoyos/destroy', 'uses' => 'ApoyosController@destroy']);
Route::post('apoyos/search', ['as' => 'apoyos/search', 'uses'=>'ApoyosController@search']);
/*------------------------------------------------------------------------------------------------------------*/

/* --------------------------------CRUD para registrar salidas de apoyos---------------------------------------------*/

Route::resource('desarrollosocial/salidas', 'SalidasDesarrolloSocialController');
Route::get('salidas/destroy/{id}', ['as' => 'salidas/destroy', 'uses' => 'SalidasDesarrolloSocialController@destroy']);
Route::post('salidas/search', ['as' => 'salidas/search', 'uses'=>'SalidasDesarrolloSocialController@search']);
/*------------------------------------------------------------------------------------------------------------*/

/*-----------------------------------------------Obtener la instancia de municipios y mostrar en select-------------------------------------------------*/
// Route::get('desarrollosocial/salidas/create', ['as' => 'desarrollosocial.salidas.create', 
// 	'uses' => 'SalidasDesarrolloSocialController@get_estados']);
/*---------------------------------------------------------------------------------------------------------------------------------------------------*/




/*-------------------------------------Rutas de los perfiles--------------------------------------------------------*/
Route::get('profile','UserController@profile');
Route::post('profile', 'UserController@update_avatar');
/*------------------------------------------------------------------------------------------------------------------*/
