<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Engagement\EngagementController;
use App\Http\Controllers\Engagement\FeedbackController;
use App\Http\Controllers\Engagement\EngagementRequestController;

Route::middleware(['auth','onboarding.check'])->group(function () {
    // General Engagement
    Route::post('/engagement', [EngagementController::class, 'store'])->name('engagement.store');
    
    // Feedback
    Route::post('/feedback', [FeedbackController::class, 'store'])->name('feedback.store');
    Route::get('/feedback-received', [FeedbackController::class, 'received'])->name('feedback.received');
    Route::get('/feedback-given', [FeedbackController::class, 'given'])->name('feedback.given');
    
    // Engagement Requests
    Route::post('/engagement-request', [EngagementRequestController::class, 'store'])->name('engagement-request.store');
    
    // Super Engagement
    Route::post('/super-engagement', [EngagementController::class, 'superEngage'])->name('engagement.super-engage');
    
    // Engagement History
    Route::get('/engagement-history', [EngagementController::class, 'history'])->name('engagement.history');
});
