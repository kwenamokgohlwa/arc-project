<?php

use App\Message;
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

Route::get('messages', 'MessageController@index');
Route::post('messages', 'MessageController@store');
Route::get('messages/{id}', 'MessageController@show');
Route::delete('messages/{id}', 'MessageController@delete');
Route::patch('messages/{id}', 'MessageController@update');
