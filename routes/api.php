<?php

use Illuminate\Support\Facades\Route;
use DDD\Http\Public\Pages\PublicPageController;
use DDD\Http\Admin\Websites\WebsiteController;
use DDD\Http\Admin\Pages\PageController;
use DDD\Http\Admin\Blocks\BlockController;

Route::prefix('public/{organization:slug}/websites/{website}')->group(function() {
    Route::get('/pages', [PublicPageController::class, 'show']);
});

Route::middleware('auth:sanctum')->group(function() {
    // Admin: Websites
    Route::prefix('admin/{organization:slug}/websites')->group(function() {
        Route::get('/', [WebsiteController::class, 'index']);
        Route::post('/', [WebsiteController::class, 'store']);
        Route::get('/{website}', [WebsiteController::class, 'show']);
        Route::put('/{website}', [WebsiteController::class, 'update']);
        Route::delete('/{website}', [WebsiteController::class, 'destroy']);

        // Admin: Pages
        Route::prefix('{website}/pages')->group(function() {
            Route::get('/', [PageController::class, 'index']);
            Route::post('/', [PageController::class, 'store']);
            Route::get('/{page}', [PageController::class, 'show']);
            Route::put('/{page}', [PageController::class, 'update']);
            Route::delete('/{page}', [PageController::class, 'destroy']);

            // Admin: Blocks
            Route::prefix('{page}/blocks')->group(function() {
                Route::post('/', [BlockController::class, 'store']);
                Route::get('/{block}', [BlockController::class, 'show']);
                Route::put('/{block}', [BlockController::class, 'update']);
                Route::delete('/{block}', [BlockController::class, 'destroy']);
            });
        });
    });
});