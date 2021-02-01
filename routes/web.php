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
    return view('home');
});
//ALITAS BBQ
Route::get('/alitas', function () {
    return view('pages.alitas');
});
//AREPAS
Route::get('/arepas', function () {
    return view('pages.arepas');
});
//SALCHIPAPAS
Route::get('/salchipapas', function () {
    return view('pages.salchipapas');
});
//hamburguesas
Route::get('/hamburguesas', function () {
    return view('pages.hamburguesas');
});
//BEBIDAS

