<?php

use App\Http\Controllers\Api\RequestPhoneController;
use App\Http\Controllers\Api\ZonePrefixController;
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

Route::post('login', [App\Http\Controllers\Api\LoginController::class, 'login'])->name('login');


Route::apiResource('prefixes', ZonePrefixController::class)
      ->only(['index'])
      ->middleware('auth:sanctum');

Route::apiResource('addrequest', RequestPhoneController::class)
      ->only(['store'])
      ->middleware('auth:sanctum')
      ->middleware('throttle:5,1');


Route::get('addrequest', function () {
    return redirect('https://api.whatstophone.com');
});
