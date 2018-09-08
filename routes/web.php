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

Route::get('/home', 'HomeControler@index');

// here we show the direction 
Route::get('/about', 'AboutConstroler@index');

Route::get('/contacts', 'ContactsConstroler@index');

Route::get('/admin', 'AdminConstroler@index');

Route::get('/test', 'testController@index');



