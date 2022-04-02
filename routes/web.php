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
    return view('web.home');
})->name("home"); //sezione home del sito

Route::get('chiSiamo', function () {
    return view('web.chiSiamo');
})->name("chiSiamo"); //sezione home del sito

Route::get('contattaci', function () {
    return view('web.contattaci');
})->name("contattaci"); //sezione home del sito

Route::resource("comics", "ComicController"); //sezione comics del sito