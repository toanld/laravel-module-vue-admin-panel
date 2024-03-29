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

// Route::middleware('auth:web')->resource('personnel','PersonnelController');
Route::prefix('personnel')
    ->middleware(['auth:web'])
    ->name('personnel')
    ->group(function (){
        Route::get('/','PersonnelController@index')->name('personnel.home');
        Route::get('/create','PersonnelController@create')->name('personnel.create');
        Route::get('/notifications','PersonnelController@notifications')->name('personnel.notifications');

    });
