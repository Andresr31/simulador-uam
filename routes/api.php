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

// Route::middleware('auth:api')->get('/user', function (Request $request) {
//     return $request->user();
// });

Route::post('login', 'Api\UserController@login');

// Route::get('prueba', function () {
//     return response()->json([
//         'res'=>true,
//         'message'=>'Hola mundo te saludo desde laravel'
//     ],200); 
// });

Route::get('rules/{room_id}','Api\RulesController@getRules');

Route::post('simulation', 'Api\SimulationController@registerScore');

Route::get('getPre','Api\SimulationController@getPre');