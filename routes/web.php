<?php

/**
 * Rutas de prueba
 */

Route::get('/', 'HomeController@index');

Route::get('prueba', function () {
    return "Hola mundo";
});

Route::get('prueba2/{qwert}', function ($nombre) {
    return "Hola Bienvenido ".$nombre;
});

Route::get('prueba3/{qwert}/otro/{gdg}', function ($nombre, $ape) {
    return "Hola Bienvenido ".$nombre." ".$ape;
});

Route::get('controlador', 'HomeController@index');

Route::get('controlador2/{param}', 'HomeController@index2');

Route::get('controlador3', 'HomeController@index3');

Route::get('posts/index', 'HomeController@getPost');

Route::get('/home', 'HomeController@index');

Route::get('protegida', function () {
    return "Ruta protegida";
})->middleware('auth');

Route::get('desprotegida', function () {
    return "Ruta desprotegida";
});
Route::get('funcion', 'HomeController@index2');

/**
 * Rutas de la aplicacion web ************************************
 */
Auth::routes();

Route::resource('articulos','PostController');
