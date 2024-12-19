<?php

use App\Http\Controllers\PaginaInicial;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('view/inicio', PaginaInicial::class, 'PaginaInicial');
