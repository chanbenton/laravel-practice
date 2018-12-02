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

// Route w/ params
Route::get('/test/{id}/{name}', function ($id,$name) {
	return "ID Number: " . $id . ", from " . $name;
});

// Optional params
Route::get('user/{name?}', function($name = null) {
    return $name;
});

Route::get('/admin/posts/example', array('as'=>'admin.home', function () {
	$url = route('admin.home');
	return "this url is ". $url;
}));

