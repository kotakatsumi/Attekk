<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\TimeController;

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

Route::middleware('auth')->group(function () {
    Route::get('/', [AuthController::class, 'index']);
    Route::post('/checkin', [TimeController::class, 'checkin']);
    Route::post('/checkout', [TimeController::class, 'checkout']);
    Route::post('/breakin', [TimeController::class, 'breakin']);
    Route::post('/breakout', [TimeController::class, 'breakout']);
    Route::get('/attendance', [TimeController::class, 'record']);
    Route::post('/attendance', [TimeController::class, 'record']);
    Route::get('/users', [TimeController::class, 'userlist']);
    Route::get('/users/attendance', [TimeController::class, 'eachuser']);
    Route::post('/users/attendance', [TimeController::class, 'eachuser']);
}
);
