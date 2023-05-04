<?php

use App\Http\Controllers\ClientController;
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

Route::get('clients', [ClientController::class, 'index']);
Route::put('clients/create', [ClientController::class, 'store']);
Route::put('clients/batch', [ClientController::class, 'batchStore']);
Route::get('clients/{client}', [ClientController::class, 'show']);
Route::post('clients/{client}', [ClientController::class, 'update']);
Route::delete('clients/{client}', [ClientController::class, 'destroy']);
