<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/valentine', 'App\Http\Controllers\ValentineController@index');