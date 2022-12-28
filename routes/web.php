<?php

use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return redirect('https://whatstophone.com');
});

//Route::get('test', [App\Http\Controllers\TestController::class, 'index'])->name('test');

Route::get('addrequest', function () {
    return redirect('https://whatstophone.com');
});

Route::get('api/login', function () {
    return redirect('https://whatstophone.com');
});

