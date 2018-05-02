<?php

Route::group(['module' => 'TestTest', 'prefix' => 'test-test', 'namespace' => 'App\Modules\TestTest\Controllers'], function() {

    Route::get('/', 'TestTestController@index');

});