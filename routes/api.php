<?php

use App\Http\Controllers\AuthController;
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

Route::post('login', [AuthController::class, 'login']);
Route::post('register', [AuthController::class, 'register']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
Route::middleware('auth:sanctum')->group(function (){
    Route::post('/revoke-token', [AuthController::class, 'revokeToken']);
    Route::apiResource('tasks', \App\Http\Controllers\TaskController::class);
    Route::apiResource('projects', \App\Http\Controllers\ProjectController::class);
});

//Route::get('tasks', [\App\Http\Controllers\TaskController::class, 'index']);
