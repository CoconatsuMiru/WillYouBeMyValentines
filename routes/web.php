<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('ask.valentine');
});

Route::get('/valentine', 'App\Http\Controllers\ValentineController@index');