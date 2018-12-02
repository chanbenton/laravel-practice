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

// Restricts all usages of 'id' to numbers only
Route::pattern('id', '[0-9]+');


Route::get('/', function () {
    return view('welcome');
});

// Route w/ params
Route::get('/test/{id}/{name}', function ($id,$name) {
	return "ID Number: " . $id . ", from " . $name;
});

// Optional params, enables /user to work
Route::get('user/{name?}', function($name = null) {
    return $name;
});
// // '/user' would not work below standalone
// Route::get('user/{name}', function($name) {
//     return $name;
// });



// Aliasing URLs
Route::get('/admin/posts/example', array('as'=>'page.home', function () {
	$url = route('page.home');
	return "this url is ". $url;
}));

