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

Route::middleware('auth:web')->resource('blog/categories','CategoryController', array("as"=>"blog"));
Route::middleware('auth:web')->resource('blog','BlogController');
Route::middleware('auth:web')->get('home','HomeController@index')->name('home');
Route::middleware('auth:web')->get('about','HomeController@about')->name('about');
Route::middleware('auth:web')->get('contact','HomeController@contact')->name('contact');
