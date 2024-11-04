<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Community\CommunityController;

Route::middleware('guest')->group(function () {
    // Main Community Routes
    Route::get('/communities', [CommunityController::class, 'index'])->name('communities.index');
    Route::get('/communities/explore', [CommunityController::class, 'explore'])->name('communities.explore');
    Route::get('/communities/{id}', [CommunityController::class, 'show'])->name('communities.show');
    
    // Community Management
    Route::post('/communities/join/{id}', [CommunityController::class, 'join'])->name('communities.join');
    Route::post('/communities/leave/{id}', [CommunityController::class, 'leave'])->name('communities.leave');
    Route::post('/communities/report/{id}', [CommunityController::class, 'report'])->name('communities.report');
    
    // Community Creation
    Route::get('/communities/create', [CommunityController::class, 'create'])->name('communities.create');
    Route::post('/communities', [CommunityController::class, 'store'])->name('communities.store');
});
