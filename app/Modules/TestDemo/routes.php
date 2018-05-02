<?php

Route::group(['module' => 'TestDemo', 'prefix' => 'test-demo', 'namespace' => 'App\Modules\TestDemo\Controllers'], function() {

    Route::get('/', 'TestDemoController@index');

});