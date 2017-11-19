<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::resource('cliente','ClienteController');
Route::resource('servicio','ServicioController');
Route::resource('menu','MenuController');
Route::resource('contacto','ContactoController');
Route::resource('reserva','ReservaController');
Route::resource('imagen','ImagenController');

//Route::post('/imagen/', 'ImagenController@storeImage')->name('menu.store.imagen');
//Route::controller('imagen', 'ImagenController');
/*Route::get('/contacto', function () {
    return view('contacto');
});*/
/*Route::get('/reservas', function () {
    return view('reservas');
});*/

Route::get('/', function () {
    return view('index');
});
Route::get('/desayuno', function () {
    return view('desayuno');
});
Route::get('/informacion', function () {
    return view('informacion');
});
Route::get('/gastronomia', function () {
    return view('gastronomia');
});
Route::get('/almuerzo', function () {
    return view('almuerzo');
});
Route::get('/especial', function () {
    return view('especial');
});
Route::get('/catering', function () {
    return view('catering');
});

/*
Route::get('/contacto', function () {
    return view('contacto');
});*/


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
