<?php

use Illuminate\Support\Facades\Route;
use DDD\Http\Public\Pages\PublicPageController;
use DDD\Http\Admin\Websites\AdminWebsiteController;

Route::prefix('public/{organization:slug}/websites/{website}')->group(function() {
    Route::get('/pages', [PublicPageController::class, 'show']);
});

Route::middleware('auth:sanctum')->group(function() {
    // Admin: Websites
    Route::prefix('admin/{organization:slug}/websites')->group(function() {
        Route::get('/', [AdminWebsiteController::class, 'index']);
        Route::post('/', [AdminWebsiteController::class, 'store']);
        Route::get('/{website}', [AdminWebsiteController::class, 'show']);
        Route::put('/{website}', [AdminWebsiteController::class, 'update']);
        Route::delete('/{website}', [AdminWebsiteController::class, 'destroy']);
    });
});