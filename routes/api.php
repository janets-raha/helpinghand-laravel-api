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

Route::apiResource('/user', 'UsersController');
Route::apiResource('/ngo', 'NgosController');
Route::apiResource('/mission', 'MissionsController');
Route::apiResource('/application', 'ApplicationsController');

// routes users only
Route::post('/login', 'UsersController@login');
Route::post('/register', 'UsersController@create');

// routes ngos only
Route::post('/login-ngo', 'NgosController@login');
Route::post('/register-ngo', 'NgosController@create');
