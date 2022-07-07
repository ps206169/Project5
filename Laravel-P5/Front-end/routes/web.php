<?php

use Iluminate\Controllers\UserController;
use Iluminate\Controllers\PrestatiesController;
use Iluminate\Controllers\OefeningenController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TestController;

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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');


Route::get('/Test', [\App\Http\Controllers\TestController::class,'index']);

Route::get('/Page', [\App\Http\Controllers\PrestatiesController::class,'index']);
require __DIR__.'/auth.php';
