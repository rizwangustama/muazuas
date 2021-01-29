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
    return view('index');
});

Route::get('/kemahasiswaan', function () {
    return view('Kemahasiswaan');
});

Route::get('/dashboard', function () {
    return view('dashboard.layout');
});

Route::get('/berita1', function () {
    return view('Kemahasiswaan/berita1');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
