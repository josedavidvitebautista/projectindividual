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

Route::get('/inicio', function () {
    return view('home');
})-> name('inicio');

Route::get('/informacion', function () {
    return view('generic');
})-> name('informacion');

Route::get('/movies', function () {
    return view('elements');
})-> name('movies');
