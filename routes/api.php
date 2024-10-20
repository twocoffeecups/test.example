<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

// find bus routes
Route::post('/find-bus', [\App\Http\Controllers\Api\Bus\FindController::class, 'find']);
// change bus route
Route::put('/route/{route}/change-stops', [\App\Http\Controllers\Api\Stops\ChangeStopsController::class, 'change']);
