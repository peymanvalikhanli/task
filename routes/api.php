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

// Route::get('users', 'Users\UsersController@user');
// Route::get('users/{id}','Users\UsersController@userById');
// Route::post('users', 'Users\UsersController@userSave');
// Route::put('users/{id}', 'Users\UsersController@userUpdate');
// Route::delete('users/{id}', 'Users\UsersController@userDelete');

Route::apiResource('users','Users\Users');