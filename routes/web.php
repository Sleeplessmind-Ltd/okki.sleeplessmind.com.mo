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

Route::redirect('/', 'https://sleeplessmind.com.mo');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/api/docs', function () {
    return view('api.docs');
})->middleware('auth');

Auth::routes();
