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
    return view('web.pages.home');
})->name('home');

Route::get('visao', function () {
    return view('web.pages.visao');
})->name('visao');

Route::get('contato', function () {
    return view('web.pages.contato');
})->name('contato');
