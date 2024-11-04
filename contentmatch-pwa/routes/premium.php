<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Premium\PremiumController;

Route::middleware('auth')->group(function () {
    // Premium Features Overview
    Route::get('/premium', [PremiumController::class, 'index'])->name('premium.index');
    
    // Subscription Management
    Route::post('/premium/subscribe', [PremiumController::class, 'subscribe'])->name('premium.subscribe');
    Route::post('/premium/cancel', [PremiumController::class, 'cancel'])->name('premium.cancel');
    
    // Billing and Invoices
    Route::get('/premium/invoices', [PremiumController::class, 'invoices'])->name('premium.invoices');
    
    // Premium Features List
    Route::get('/premium/features', [PremiumController::class, 'features'])->name('premium.features');
});
