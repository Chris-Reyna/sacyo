<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the Closure to execute when that URI is requested.
|
*/

Route::get('/', 'HomeController@showHome');
Route::get('signup', 'HomeController@showSignup');
Route::resource('users', 'UsersController');
Route::resource('posts', 'PostsController');
Route::get('orm-test', function () {
    // test code here
    
	$post = Post::find(1);
	return $post;

});
