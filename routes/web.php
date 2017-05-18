<?php

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

Route::get('/music', function () {
    return view('music');
})->name('music');

Route::get('/sports', function () {
    return view('sports');
})->name('sports');

Route::get('/theatre', function () {
    return view('theatre');
})->name('theatre');

Route::get('/comedy', function () {
    return view('comedy');
})->name('comedy');
