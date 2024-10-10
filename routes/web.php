<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

// MVC
Route::get('/outra-rota', fn() => 'oi' );
