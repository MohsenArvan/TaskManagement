<?php

use App\Http\Controllers\Board\BoardController;
use App\Http\Controllers\Task\TaskController;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\Route;

Route::middleware(['auth:sanctum'])->get('/user', function (Request $request) {
    return $request->user();
});

Route::middleware('auth:sanctum')->group(function(){
    // Route::apiResource('board', BoardController::class);
    Route::apiResource('board', BoardController::class);
    Route::apiResource('board.task', TaskController::class);
});

require __DIR__.'/auth.php';