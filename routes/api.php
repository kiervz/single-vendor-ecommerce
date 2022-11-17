<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\V1\Auth\LoginController;
use App\Http\Controllers\Api\V1\Auth\RegisterController;

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


Route::middleware('auth:sanctum')->group(function () {
    Route::post('/v1/auth/logout', [LoginController::class, 'logout'])->name('auth.logout');
    Route::get('/v1/auth/me', function (Request $request) {
        return $request->user();
    });
});

Route::group(['prefix' => 'v1'], function() {
    Route::post('auth/register', [RegisterController::class, 'register'])->name('auth.register');
    Route::post('auth/login', [LoginController::class, 'login'])->name('auth.login');
});