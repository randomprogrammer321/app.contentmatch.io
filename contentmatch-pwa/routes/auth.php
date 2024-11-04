<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\OtpController;
use App\Http\Controllers\Auth\SocialAuthController;
use Illuminate\Support\Facades\Route;

Route::middleware(['web'])->group(function () {
    Route::middleware('guest')->group(function () {
        // Login Routes
        Route::get('login', [LoginController::class, 'showLoginForm'])->name('login');
        Route::post('login', [LoginController::class, 'login']);
        
        // Registration Routes
        Route::get('register', [RegisterController::class, 'showRegistrationForm'])
            ->name('register');
        Route::post('register', [RegisterController::class, 'register'])->name('register.process');
        
        // Social Authentication Routes
        Route::get('login/{provider}', [SocialAuthController::class, 'redirectToProvider'])
            ->name('login.social');
        Route::get('login/{provider}/callback', [SocialAuthController::class, 'handleCallback'])
            ->name('login.social.callback');
    });

    // OTP Routes - moved outside guest middleware
    Route::get('/otp', [OtpController::class, 'showOtpForm'])->name('otp.form');
    Route::post('/otp/verify', [OtpController::class, 'verifyOtp'])->name('otp.verify');
    Route::post('/otp/resend', [OtpController::class, 'resendOtp'])->name('otp.resend');

    Route::middleware('auth')->group(function () {
        Route::post('logout', [LoginController::class, 'logout'])->name('logout');
        Route::get('logout', [LoginController::class, 'logout'])->name('logout');
    });
});
