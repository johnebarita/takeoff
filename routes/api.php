<?php

use App\Http\Controllers\Api\ApiLoginController;
use App\Http\Controllers\Api\JobController;
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


//
//Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
//    return $request->user();
//});

Route::post('/login', [ApiLoginController::class, 'login'])->middleware('api');

Route::middleware('auth:sanctum')->group(function () {
    Route::get('jobs', [JobController::class, 'show'])->name('api.job.show');
    Route::get('job/{ref}', [JobController::class, 'find'])->name('api.job.find');
});
