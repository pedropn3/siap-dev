<?php

/*Route::get('/', function () {
    return 'Home';
});*/

Route::get('/', 'PagesController@home');

/* Plantilla de Correos de Comercialización a Clientes */
Route::get('/plantillacorreos', 'PlantillacorreoController@index')
        ->name('plantillacorreos.index');

Route::get('/plantillacorreos/{plantillacorreo}', 'PlantillacorreoController@show')
        ->where('plantillacorreo','\d+')
        ->name('plantillacorreos.show');

Route::get('/plantillacorreos/nuevo', 'PlantillacorreoController@create')
        ->name('plantillacorreos.create');

Route::get('/plantillacorreos/{plantillacorreo}/editar', 'PlantillacorreoController@edit')
        ->name('plantillacorreos.edit');

Route::put('/plantillacorreos/{plantillacorreo}', 'PlantillacorreoController@update');

Route::post('/plantillacorreos', 'PlantillacorreoController@store');

Route::delete('/plantillacorreos/{plantillacorreo}', 'PlantillacorreoController@destroy')
        ->name('plantillacorreos.destroy');



/* Listado de Clientes (Propietarios) */
Route::get('/propietarios', 'PropietarioController@index')
        ->name('propietarios.index');

Route::get('/propietarios/{propietario}', 'PropietarioController@show')
        ->where('propietario','\d+')
        ->name('propietarios.show');

Route::get('/propietarios/nuevo', 'PropietarioController@create')
        ->name('propietarios.create');

Route::get('/propietarios/{propietario}/editar', 'PropietarioController@edit')
        ->name('propietarios.edit');

Route::put('/propietarios/{propietario}', 'PropietarioController@update');

Route::post('/propietarios', 'PropietarioController@store');

Route::delete('/propietarios/{propietario}', 'PropietarioController@destroy')
        ->name('propietarios.destroy');


/* Estaciones de Servicio */
Route::get('/estaciones', 'EstacionController@index')
        ->name('estaciones.index');

Route::get('/estaciones/{estacion}', 'EstacionController@show')
        ->where('estacion','\d+')
        ->name('estaciones.show');

Route::get('/estaciones/nuevo', 'EstacionController@create')
        ->name('estaciones.create');

Route::get('/estaciones/{estacion}/editar', 'EstacionController@edit')
        ->name('estaciones.edit');

Route::put('/estaciones/{estacion}', 'EstacionController@update');

Route::post('/estaciones', 'EstacionController@store');

Route::delete('/estaciones/{estacion}', 'EstacionController@destroy')
        ->name('estaciones.destroy');