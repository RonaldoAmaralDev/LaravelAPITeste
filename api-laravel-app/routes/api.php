<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('login', 'AuthController@login');
    Route::post('logout', 'AuthController@logout');
    Route::post('refresh', 'AuthController@refresh');
    Route::post('me', 'AuthController@me');
});

Route::post('register', 'AuthController@register');
Route::post('login', 'AuthController@login');
Route::post('recover', 'AuthController@recover');

// Route::group(['middleware' => ['jwt.auth']], function() {
//     Route::get('logout', 'AuthController@logout');
//     Route::get('test', function(){
//         return response()->json(['foo'=>'bar']);
//     });
// });

// Route::group(['middleware' => 'auth:api'], function() {

// 	Route::get('transacoes', 'TransacoesController@index');
// 	Route::get('transacoes/{id}', 'TransacoesController@show');
// 	Route::post('transacoes', 'TransacoesController@store');
// 	Route::put('transacoes/{id}', 'TransacoesController@update');
// 	Route::delete('transacoes/{id}', 'TransacoesController@delete');

// });


	Route::get('transacoes', 'TransacoesController@index');
	Route::get('transacoes/{id}', 'TransacoesController@show');
	Route::post('transacoes', 'TransacoesController@store');
	Route::put('transacoes/{id}', 'TransacoesController@update');
	Route::delete('transacoes/{id}', 'TransacoesController@delete');

