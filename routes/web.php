<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/Pagina de Inicio', function () {
    return view('Pagina de Inicio');
});

Route::get('/Pronto', function () {
    return view('Pronto');
});

Route::get('/Costa', function () {
    return view('Costa');
});

Route::get('/Sierra', function () {
    return view('Sierra');
});

Route::get('/Selva', function () {
    return view('Selva');
});