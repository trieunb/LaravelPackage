<?php

Route::group(['module' => 'Demo', 'prefix' => 'demo', 'namespace' => 'App\Modules\Demo\Controllers'], function() {

    Route::get('/', 'DemoController@index');

});