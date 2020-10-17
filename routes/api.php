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

Route::resource('bengkel', BengkelController::class);
Route::get('bengkel', 'BengkelController@index');
Route::post('bengkel', 'BengkelController@store');
Route::get('/bengkel/{id}', 'BengkelController@show');
Route::put('/bengkel/{id}', 'BengkelController@update');
Route::delete('/bengkel/{id}', 'BengkelController@destroy');

Route::resource('motorcycle', MotorcycleController::class);
Route::get('motorcycle', 'MotorcycleController@index');
Route::post('motorcycle', 'MotorcycleController@store');
Route::get('/motorcycle/{id}', 'MotorcycleController@show');
Route::put('/motorcycle/{id}', 'MotorcycleController@update');
Route::delete('/motorcycle/{id}', 'MotorcycleController@destroy');

Route::resource('payment', PaymentController::class);
Route::get('payment', 'PaymentController@index');
Route::post('payment', 'PaymentController@store');
Route::get('/payment/{id}', 'PaymentController@show');
Route::put('/payment/{id}', 'PaymentController@update');
Route::delete('/payment/{id}', 'PaymentController@destroy');