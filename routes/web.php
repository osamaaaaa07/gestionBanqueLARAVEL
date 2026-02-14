<?php

use App\Http\Controllers\AgenceController;
use App\Http\Controllers\ClientController;
use App\Http\Controllers\VirementController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/agences');
});

Route::get('/agences', [AgenceController::class, 'index']);
Route::get('/agences/create', [AgenceController::class, 'create']);
Route::post('/agences', [AgenceController::class, 'store']);
Route::get('/agences/{agence}', [AgenceController::class, 'show']);
Route::get('/agences/{agence}/edit', [AgenceController::class, 'edit']);
Route::put('/agences/{agence}', [AgenceController::class, 'update']);
Route::delete('/agences/{agence}', [AgenceController::class, 'destroy']);

Route::get('/clients', [ClientController::class, 'index']);
Route::get('/clients/create', [ClientController::class, 'create']);
Route::post('/clients', [ClientController::class, 'store']);
Route::get('/clients/{client}', [ClientController::class, 'show']);
Route::get('/clients/{client}/edit', [ClientController::class, 'edit']);
Route::put('/clients/{client}', [ClientController::class, 'update']);
Route::delete('/clients/{client}', [ClientController::class, 'destroy']);

Route::get('/virements', [VirementController::class, 'index']);
Route::get('/virements/create', [VirementController::class, 'create']);
Route::post('/virements', [VirementController::class, 'store']);
Route::get('/virements/{virement}', [VirementController::class, 'show']);
Route::get('/virements/{virement}/edit', [VirementController::class, 'edit']);
Route::put('/virements/{virement}', [VirementController::class, 'update']);
Route::delete('/virements/{virement}', [VirementController::class, 'destroy']);
