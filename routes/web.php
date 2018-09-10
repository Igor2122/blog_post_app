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

// Route::get('/users/{id}/{name}', function($id, $name){
// 	return 'This is user '. $id .' and a name of: '. $name;
// });

// Route::get('/', function () {
//     return view('welcome');
// }); 

// Route::get('/about', function () {
//     return view('pages.about');
// }); 

Route::get('/', 'PagesController@index');
Route::get('/about', 'PagesController@about');
Route::get('/services', 'PagesController@services');

Route::resource('/posts', 'PostsController');
Route::resource('/login', 'LoginController');
Route::resource('/register', 'RegisterController');



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
