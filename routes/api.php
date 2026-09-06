<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CommandeController;
use App\Http\Controllers\VenteDetailController;
use App\Http\Controllers\VenteGrosController;
use App\Http\Controllers\DebitCreditController;
use App\Http\Controllers\InventaireController;
use App\Http\Controllers\AuthController;

Route::post('/login', [AuthController::class, 'login']);

Route::middleware('auth:sanctum')->group(function () {
    Route::apiResource('commandes', CommandeController::class);
    Route::apiResource('ventes-detail', VenteDetailController::class);
    Route::apiResource('ventes-gros', VenteGrosController::class);
    Route::apiResource('debit-credit', DebitCreditController::class);
    Route::apiResource('inventaires', InventaireController::class);
});
