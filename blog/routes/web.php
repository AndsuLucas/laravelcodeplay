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

Route::get('/', "PostController@showPosts" );
Route::get('/post/register', "PostController@returnFormCreatePosts");
Route::get('/post/view/{id}', "PostController@viewPost")->where('id', '[0-9]+');
Route::get("/post/update/{id}'", "PostController@returnUpdateForm");


Route::post('/post/create', "PostController@createPost");
