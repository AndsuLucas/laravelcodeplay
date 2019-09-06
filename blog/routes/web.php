<?php

use Illuminate\Support\Facades\Auth;
/**
 * CRUD BÁSICO
 */
Route::get('/', "PostController@showPosts" );
Route::get('/post/register', "PostController@returnFormCreatePosts");
Route::get('/post/view/{id}', "PostController@viewPost")->where('id', '[0-9]+');
Route::post('/post/create', "PostController@createPost");

Route::match(
	['get', 'put'], //método HTTP
	'post/update/{id}', //url
	'PostController@updatePost' //controller->método

)->where('id', '[0-9]+');

Route::match(
	['delete', 'get'],
	'post/delete/{id}',
	'PostController@deletePost'
)->where('id', '[0-9]+');

/*--- FIM CRUD BÁSICO ---*/

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::match(
    ['get', 'post'],
    'profile/create',
    'ProfileController@newProfile'
)->name('profile_create');
