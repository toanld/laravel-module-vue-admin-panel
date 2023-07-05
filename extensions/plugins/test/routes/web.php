<?php

/*
 * Fresns (https://fresns.org)
 * Copyright (C) 2021-Present Jevan Tang
 * Released under the Apache-2.0 License.
 */

use Illuminate\Support\Facades\Route;
use Plugins\Test\Http\Controllers as WebController;

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

Route::prefix('test')->group(function() {
    Route::get('/', [WebController\TestController::class, 'index'])->name('test.index');
    Route::get('setting', [WebController\TestController::class, 'showSettingView'])->name('test.setting');
    Route::post('setting', [WebController\TestController::class, 'saveSetting']);
});

// without VerifyCsrfToken
// Route::prefix('test')->withoutMiddleware([
//     \App\Http\Middleware\EncryptCookies::class,
//     \App\Http\Middleware\VerifyCsrfToken::class,
// ])->group(function() {
//     Route::get('/', [WebController\TestController::class, 'index']);
// });
