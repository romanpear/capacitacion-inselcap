<?php

Route::get('/', 'HomeController@index3');

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