<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Message\MessageController;

Route::middleware(['auth','onboarding.check'])->group(function () {
    // Message Center
    Route::get('/messages', [MessageController::class, 'index'])->name('messages.index');
    
    // Message Requests
    Route::get('/messages/requests', [MessageController::class, 'requests'])->name('messages.requests');
    
    // Individual Conversation
    Route::get('/messages/{id}', [MessageController::class, 'show'])->name('messages.show');
    
    // Message Actions
    Route::post('/messages', [MessageController::class, 'store'])->name('messages.store');
    Route::delete('/messages/{id}', [MessageController::class, 'destroy'])->name('messages.destroy');
    Route::post('/messages/{id}/read', [MessageController::class, 'markAsRead'])->name('messages.read');
});
