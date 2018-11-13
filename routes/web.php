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

Route::get('/', 'BlogController@index');

Route::get('/view/{category}/{post}', 'BlogController@post');


/* CATEGORY + ADMIN */
Route::get('/admin', 'AdminController@index');

// login admin
Route::post('/admin/login', 'AdminController@login');

// delete category
Route::get('/admin/category/{category}', 'AdminController@destroy');

// add category
Route::post('/admin/category', 'AdminController@store');

// edit category
Route::post('/admin/category/{category}', 'AdminController@edit');

/* category view */
Route::get('/admin/{category}', 'AdminController@category');


// delete post
Route::get('/admin/post/{post}', 'AdminController@destroy');

// add post
Route::post('/admin/post', 'AdminController@store');

// edit post
Route::post('/admin/post/{post}', 'AdminController@edit');

/* post view */
Route::get('/admin/{category}/{post}', 'AdminController@post');
