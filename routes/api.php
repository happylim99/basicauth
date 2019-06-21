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

Route::get('email/{email}/verify/{id}', 'Api\Auth\VerificationApiController@verify')->name('verificationapi.verify');
Route::get('email/resend', 'Api\Auth\VerificationApiController@resend')->name('verificationapi.resend');

Route::post('login', 'Api\Auth\UserController@login');
Route::post('register', 'Api\Auth\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('logout', 'Api\Auth\UserController@logout');
    Route::post('details', 'Api\Auth\UserController@details');
});