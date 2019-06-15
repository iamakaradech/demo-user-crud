<?php

use Illuminate\Http\Request;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group(['prefix' => 'users', 'as' => 'api.', 'namespace' => 'Api'], function () {
   Route::get('/', ['as' => 'users.index', 'uses' => 'UserController@index']);
   Route::get('/{uuid}', ['as' => 'users.show', 'uses' => 'UserController@show']);
   Route::put('/{uuid}', ['as' => 'users.update', 'uses' => 'UserController@update']);
});
