<?php

use Illuminate\Http\Request;

Route::group(['prefix' => 'api'], function () {
    Route::group(['prefix' => 'v1'], function () {

        //Auth
        Route::group(['middleware' => 'api', 'prefix' => 'auth'], function ($router) {
            Route::post('login', 'AuthController@login');
            Route::post('logout', 'AuthController@logout');
            Route::post('refresh', 'AuthController@refresh');
            Route::post('me', 'AuthController@me');
        });





    });
});

