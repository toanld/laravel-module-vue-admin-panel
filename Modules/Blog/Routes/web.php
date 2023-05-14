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
Route::middleware('auth:web')->resource('comment','Api\CommentsController');

Route::middleware('auth:web')->get('home','HomeController@index')->name('home');
Route::middleware('auth:web')->get('about','HomeController@about')->name('about');
Route::middleware('auth:web')->get('contact','HomeController@contact')->name('contact');
Route::middleware('auth:web')->get('blog.html','HomeController@blog')->name('blog');
Route::middleware('auth:web')->get('/{category_id}/{title}-{id}.html', 'HomeController@detail')->where(['title' => '[^\.]+','category_id' => '[0-9]+', 'id' => '[0-9]+'])->name('detail');
