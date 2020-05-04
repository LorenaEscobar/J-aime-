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
    return view('index');
});

Route::get('/inicio', function () {
    return view('index');
});

Route::get('/preguntasFrecuentes', function () {
    return view('fqa');
});

Route::get('/contacto', function () {
    return view('contacto');
});
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
