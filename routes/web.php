<?php

use App\Http\Controllers\WelcomeController;
use Illuminate\Support\Facades\Route;

Route::get('/', WelcomeController::class);

// MVC
// Route::get('/outra-rota', fn() => 'oi' );
