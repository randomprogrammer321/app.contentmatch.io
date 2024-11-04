<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\AdminController;

Route::middleware(['auth', 'admin'])->prefix('admin')->group(function () {
    // Admin Dashboard
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    
    // User Management
    Route::get('/users', [AdminController::class, 'users'])->name('admin.users');
    
    // Content Management
    Route::get('/content', [AdminController::class, 'content'])->name('admin.content');
    
    // Community Management
    Route::get('/communities', [AdminController::class, 'communities'])->name('admin.communities');
    
    // Report Management
    Route::get('/reports', [AdminController::class, 'reports'])->name('admin.reports');
    
    // Analytics Dashboard
    Route::get('/analytics', [AdminController::class, 'analytics'])->name('admin.analytics');
    
    // Admin Settings
    Route::get('/settings', [AdminController::class, 'settings'])->name('admin.settings');
});
