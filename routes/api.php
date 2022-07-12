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

Route::group(['middleware' => 'jwt.verify'], function() {
    Route::post('/profile', [JWTController::class, 'profile']);
    Route::get('/sample', function(){
        dd(1);
    });
});
Route::post('/register', [JWTController::class, 'register']);
Route::post('/login', [JWTController::class, 'login']);