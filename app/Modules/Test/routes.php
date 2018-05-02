<?php

Route::group(['module' => 'Test', 'prefix' => 'test', 'namespace' => 'App\Modules\Test\Controllers'], function() {

    Route::get('/', 'TestController@index');

});