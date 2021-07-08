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

Route::get('regiones', 'App\Http\Controllers\RegionController@index');
Route::get('provincias', 'App\Http\Controllers\ProvinciaController@index');
Route::get('ciudades', 'App\Http\Controllers\CiudadController@index');
Route::get('calles', 'App\Http\Controllers\CalleController@index');