<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/orden','OrdenServicioController@index');
Route::get('/pdf','OrdenServicioController@pdf');
