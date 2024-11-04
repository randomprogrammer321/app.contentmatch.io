<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Notification\NotificationController;

Route::middleware('guest')->group(function () {
    // Main Notifications View
    Route::get('/notifications', [NotificationController::class, 'index'])->name('notifications.index');
    
    // Filter Notifications
    Route::get('/notifications/feedbacks', [NotificationController::class, 'feedbacks'])->name('notifications.feedbacks');
    Route::get('/notifications/engagements', [NotificationController::class, 'engagements'])->name('notifications.engagements');
    
    // Notification Actions
    Route::delete('/notifications/{id}', [NotificationController::class, 'destroy'])->name('notifications.destroy');
    Route::post('/notifications/{id}/read', [NotificationController::class, 'markAsRead'])->name('notifications.read');
    Route::post('/notifications/read-all', [NotificationController::class, 'markAllAsRead'])->name('notifications.read.all');
});
