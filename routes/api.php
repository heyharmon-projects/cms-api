<?php

use Illuminate\Support\Facades\Route;
use DDD\Http\Websites\WebsiteController;

Route::middleware('auth:sanctum')->group(function() {
    // Websites
    Route::prefix('{organization:slug}/websites')->group(function() {
        Route::get('/', [WebsiteController::class, 'index']);
        Route::post('/', [WebsiteController::class, 'store']);
        Route::get('/{website}', [WebsiteController::class, 'show']);
        Route::put('/{website}', [WebsiteController::class, 'update']);
        Route::delete('/{website}', [WebsiteController::class, 'destroy']);
    });
});