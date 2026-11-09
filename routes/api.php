<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/test', function () {
    return response()->json([
        'message' => 'Mon API fonctionne !'
    ]);
});

// Routes CRUD des tâches
Route::apiResource('tasks', TaskController::class)->middleware('auth:sanctum');
