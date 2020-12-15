<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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

Route::apiResource("/appoinment","App\Http\Controllers\API\Appoinment_Controller");
Route::apiResource("/doctor","App\Http\Controllers\API\Doctor_Controller");
Route::apiResource("/examn","App\Http\Controllers\API\Examn_Controller");
Route::apiResource("/patient","App\Http\Controllers\API\Patient_Controller");
Route::apiResource("/roles","App\Http\Controllers\API\Roles_Controller");
Route::apiResource("/speciality","App\Http\Controllers\API\Speciality_Controller");

//Users

Route::post('login', 'App\Http\Controllers\API\UserController@login');
Route::post('register', 'App\Http\Controllers\API\UserController@register');
Route::group(['middleware' => 'auth:api'], function(){
Route::post('details', 'App\Http\Controllers\API\UserController@details');
});