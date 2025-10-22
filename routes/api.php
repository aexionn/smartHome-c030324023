<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/lamps', [App\Http\Controllers\Api\LampController::class, 'index']);

Route::post('/lamps/{id}', [App\Http\Controllers\Api\LampController::class, 'updateLamp']);

Route::get('/status', [App\Http\Controllers\Api\StatusController::class, 'index']);

Route::get('/histories', [App\Http\Controllers\Api\HistoryController::class, 'index']);