<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndonesiaVillageController;

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


Route::get('/desa', [IndonesiaVillageController::class, 'index']);
Route::get('/desa/{id}', [IndonesiaVillageController::class, 'show']);
Route::post('/desa', [IndonesiaVillageController::class, 'store']);
Route::put('/desa/{id}', [IndonesiaVillageController::class, 'update']);
Route::delete('/desa/{id}', [IndonesiaVillageController::class, 'destroy']);