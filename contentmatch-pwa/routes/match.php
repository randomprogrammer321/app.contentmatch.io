<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Match\MatchController;

Route::middleware('auth', 'onboarding.check')->group(function () {
    // Getting Started/Onboarding Page
    Route::get('/match', [MatchController::class, 'index'])->name('match.index');
    
    // Main Match Pages
    Route::get('/match/matches', [MatchController::class, 'matches'])->name('match.matches');
    Route::get('/match/past-engagements', [MatchController::class, 'pastEngagements'])->name('match.past-engagements');
    Route::get('/match/requests', [MatchController::class, 'requests'])->name('match.requests');
    
    // Match Actions (for demo)
    Route::post('/match/swipe', [MatchController::class, 'swipe'])->name('match.swipe');
    Route::post('/match/super-engage', [MatchController::class, 'superEngage'])->name('match.super-engage');
});
