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


/* CATEGORY + ADMIN */
Route::get('/admin', 'AdminController@index');

// login admin
Route::post('/admin/login', 'AdminController@login');

// delete category
Route::get('/admin/category', 'AdminController@destroy');

// add category
Route::post('/admin/category', 'AdminController@store');

// add post
Route::post('/admin/post', 'AdminController@store');


/* POST + ADMIN */
Route::get('/admin/post/{idx}', 'AdminController@post');
