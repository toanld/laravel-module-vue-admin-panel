<?php
Route::group([
    'namespace' => 'Test',
    'prefix' => "tests"
], function () {
    Route::get('/test1','TestController@test1')->name('test1');
    Route::post('/test1','TestController@testsubmit')->name('testsubmit');
});
