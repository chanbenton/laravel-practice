<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
| Reference: https://laravel.com/docs/4.2/routing#basic-routing
|
*/
Route::get('/', function () {
	return 'This is the home page!';
});
// Route::resource('post', 'PostController');

Route::get('/post', 'PostController@index');