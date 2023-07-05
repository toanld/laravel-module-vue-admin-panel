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

//Route::middleware('auth:web')->resource('erp','ErpController');
Route::prefix('erp')
    ->middleware(['auth:web'])
    ->group(function (){
        Route::get('/','ErpController@index')->name('erp.home');
    });
