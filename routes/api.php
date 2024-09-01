<?php

use Illuminate\Support\Facades\Route;
use DDD\Http\Public\Websites\PublicWebsiteStylesheetController;
use DDD\Http\Public\Websites\PublicWebsiteController;
use DDD\Http\Public\Pages\PublicPageController;
use DDD\Http\Admin\Websites\WebsiteController;
use DDD\Http\Admin\Pages\PageController;
use DDD\Http\Admin\Files\FileDownloadController;
use DDD\Http\Admin\Files\FileController;
use DDD\Http\Admin\Designs\DesignController;
use DDD\Http\Admin\Blocks\BlockController;

// Public
Route::prefix('public')->group(function() {
    // Public: Website
    Route::prefix('/websites')->group(function() {
        Route::get('/{website:slug}', [PublicWebsiteController::class, 'show']);

        // Public: Website Stylesheet
        Route::get('/{website:slug}/stylesheet', [PublicWebsiteStylesheetController::class, 'show']);
    });
    
    // Public: Page
    Route::prefix('/websites/{website:slug}')->group(function() {
        Route::get('/pages', [PublicPageController::class, 'show']);
    });
});

// Admin
Route::middleware('auth:sanctum')->prefix('admin')->group(function() {
    // Route::get('organizations', [OrganizationController::class, 'index']);
    // Route::post('organizations', [OrganizationController::class, 'store']);
    // Route::get('organizations/{organization:slug}', [OrganizationController::class, 'show']);
    // Route::put('organizations/{organization:slug}', [OrganizationController::class, 'update']);
    // Route::delete('organizations/{organization:slug}', [OrganizationController::class, 'destroy']);
    
    // Admin: Organization
    Route::prefix('{organization:slug}')->group(function() {
        
        // Admin: Websites
        Route::prefix('websites')->group(function() {
            Route::get('/', [WebsiteController::class, 'index']);
            Route::post('/', [WebsiteController::class, 'store']);
            Route::get('/{website:slug}', [WebsiteController::class, 'show']);
            Route::put('/{website:slug}', [WebsiteController::class, 'update']);
            Route::delete('/{website:slug}', [WebsiteController::class, 'destroy']);

            // Admin: Pages
            Route::prefix('{website:slug}/pages')->group(function() {
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

        // Admin: Designs
        Route::prefix('designs')->group(function() {
            Route::get('/', [DesignController::class, 'index']);
            Route::post('/', [DesignController::class, 'store']);
            Route::get('/{design}', [DesignController::class, 'show']);
            Route::put('/{design}', [DesignController::class, 'update']);
            Route::delete('/{design}', [DesignController::class, 'destroy']);
        });

        // Admin: Files
        Route::prefix('files')->group(function () {
            Route::get('/', [FileController::class, 'index']);
            Route::post('/', [FileController::class, 'store']);
            Route::get('/{file}', [FileController::class, 'show']);
            Route::post('/{file}', [FileController::class, 'update']);
            Route::delete('/{file}', [FileController::class, 'destroy']);
        });
    });
});