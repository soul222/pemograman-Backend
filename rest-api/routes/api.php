<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AnimalController;

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

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

// Method GET
Route::get('/animals', [AnimalController::class, 'index']);

// Method POST
Route::post('/animals', [AnimalController::class, 'store']);

// Method PUT
Route::put('/animals/{id}', [AnimalController::class, 'update']);

// Method DELETE
Route::delete('/animals/{id}', [AnimalController::class, 'destroy']);
