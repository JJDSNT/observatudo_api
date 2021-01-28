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

/*
 *  API V1 ROUTES
 */

Route::get('estados','App\Http\Controllers\Api\StateCityAPIController@getStateList');
Route::get('cidades','App\Http\Controllers\Api\StateCityAPIController@getCityList');