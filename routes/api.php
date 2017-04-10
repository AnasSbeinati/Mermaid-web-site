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

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:api');
Route::post('request-booking', 'HomeController@request_booking')->name('request.booking');
Route::post('send-message', 'HomeController@send_message')->name('send.message');
Route::post('request', 'HomeController@request')->name('request');
Route::post('follow', 'HomeController@follow')->name('follow');