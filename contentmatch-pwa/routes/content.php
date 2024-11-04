<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Content\ContentController;

Route::middleware('auth')->group(function () {
    // Content Feed
    
    // Content Creation
    Route::get('/content/create', [ContentController::class, 'create'])->name('content.create');
    Route::post('/content', [ContentController::class, 'store'])->name('content.store');
    
    // Platform-specific Content Creation
    Route::post('/content/instagram', [ContentController::class, 'storeInstagram'])->name('content.store.instagram');
    Route::post('/content/youtube', [ContentController::class, 'storeYoutube'])->name('content.store.youtube');
    Route::post('/content/tiktok', [ContentController::class, 'storeTiktok'])->name('content.store.tiktok');
    
    // Content Management
    Route::get('/content/{id}', [ContentController::class, 'show'])->name('content.show');
    Route::put('/content/{id}', [ContentController::class, 'update'])->name('content.update');
    Route::delete('/content/{id}', [ContentController::class, 'destroy'])->name('content.destroy');
    
    // Content Reporting
    Route::post('/content/{id}/report', [ContentController::class, 'report'])->name('content.report');
    
    // Content Analytics
    Route::get('/content/{id}/analytics', [ContentController::class, 'showAnalytics'])->name('content.analytics');
});
