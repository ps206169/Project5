<?php

use App\Http\Controllers\AuthenticationController;
use App\Http\Controllers\PrestatiesController;
use App\Http\Controllers\OefeningenController;
use App\Http\Controllers\UserController;
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
Route::post('/register', [AuthenticationController::class, 'register']);
Route::post('/login', [AuthenticationController::class, 'login']);

Route::group(['middleware' => ['auth:sanctum']], function () {
    Route::get('profile', function (Request $request) {
        auth()->user();
    });
    Route::put('/prestaties/update/{id}',[PrestatiesController::class, 'update']);
    Route::delete('prestaties/delete/{id}', [PrestatiesController::class, 'destroy']);

    Route::apiResource('prestaties', PrestatiesController::class);
    Route::get('users/{id}/prestaties', [PrestatiesController::class, 'index']);
    Route::delete('users/{id}/prestaties', [PrestatiesController::class, 'destroy']);

    Route::apiResource('users', UserController::class)
        ->only(['index','show']);

    Route::post('/logout', [AuthenticationController::class, 'logout']);
});

Route::apiResource('oefeningen', OefeningenController::class);


Route::fallback(function(){
    return response()->json([
        'message' => 'Page Not Found. If error persists, contact info@website.com'], 404);
});
