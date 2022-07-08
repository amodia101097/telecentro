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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// clientes
Route::get('/client/all', 'App\Http\Controllers\ClienteController@index')->name('index');
Route::get('/client', 'App\Http\Controllers\ClienteController@showC')->name('showC');
Route::post('/client', 'App\Http\Controllers\ClienteController@store')->name('store');
Route::post('/client/search', 'App\Http\Controllers\ClienteController@show')->name('show');
Route::put('/client', 'App\Http\Controllers\ClienteController@update')->name('update');
Route::delete('/client/delete', 'App\Http\Controllers\ClienteController@destroy')->name('destroy');


// puerto
Route::get('/ports/all', 'App\Http\Controllers\PuertoController@index')->name('index');
Route::get('/ports', 'App\Http\Controllers\PuertoController@showP')->name('showP');
Route::post('/ports', 'App\Http\Controllers\PuertoController@store')->name('store');
Route::post('/ports/id', 'App\Http\Controllers\PuertoController@show')->name('show');
Route::put('/ports', 'App\Http\Controllers\PuertoController@update')->name('update');
Route::post('/ports/search', 'App\Http\Controllers\PuertoController@searchIdp')->name('searchIdp');
Route::delete('/ports', 'App\Http\Controllers\PuertoController@destroy')->name('destroy');
Route::delete('/ports/delete', 'App\Http\Controllers\PuertoController@deleteIdp')->name('deleteIdp');

Route::post('/port', 'App\Http\Controllers\PuertoController@apiP')->name('apiP');
