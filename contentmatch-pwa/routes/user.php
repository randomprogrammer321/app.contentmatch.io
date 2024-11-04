<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\User\UserController;
use App\Http\Controllers\Auth\OnboardingController;
use App\Http\Controllers\CheckoutController;
use App\Http\Controllers\User\SettingsController;
use App\Http\Controllers\Feed\FeedController;
use App\Http\Controllers\User\ProfileController;
use App\Http\Controllers\BillingPortalController;

// Change 'guest' to ['auth', 'onboarding.check'] for protected routes
Route::middleware(['auth', 'onboarding.check'])->group(function () {
    // Main Feed
    Route::get('/feed', [FeedController::class, 'index'])->name('feed.home');
    Route::get('/following', [FeedController::class, 'following'])->name('feed.following');
    // Trending/Explore Feed
});

// Change 'guest' to ['auth', 'onboarding.check'] for protected routes
// Route::middleware(['auth', 'onboarding.check'])->group(function () {
Route::middleware(['auth'])->group(function () {
    // User Settings
    Route::prefix('settings')->group(function () {
        Route::get('/', [SettingsController::class, 'index'])->name('settings.index');
        
        // Profile Settings
        Route::get('/profile', [SettingsController::class, 'profile'])->name('settings.profile');
        Route::put('/profile', [SettingsController::class, 'updateProfile'])->name('settings.profile.update');
        
        // Notification Settings
        Route::get('/notifications', [SettingsController::class, 'notifications'])->name('settings.notifications');
        Route::put('/notifications', [SettingsController::class, 'updateNotifications'])->name('settings.notifications.update');
        
        // Language Settings
        Route::get('/language', [SettingsController::class, 'languages'])->name('settings.language');
        Route::put('/language', [SettingsController::class, 'updateLanguage'])->name('settings.language.update');
        
        // User Billing Portal AND CHECKOUT
        Route::get('/billing-portal', BillingPortalController::class)->name('settings.billing-portal');
        Route::get('/billing', [BillingPortalController::class])->name('settings.billing');
        
        Route::get('/checkout', [CheckoutController::class, 'checkout'])->name('checkout');
 
         
        Route::view('/checkout/success', 'checkout.success')->name('checkout-success');
        Route::view('/checkout/cancel', 'checkout.cancel')->name('checkout-cancel');
        
        // Account Privacy
        Route::get('/privacy', [SettingsController::class, 'privacy'])->name('settings.privacy');
        Route::put('/privacy', [SettingsController::class, 'updatePrivacy'])->name('settings.privacy.update');
        
        // Blocked Users Management
        Route::get('/blocked', [SettingsController::class, 'blocked'])->name('settings.blocked');
        Route::post('/block', [SettingsController::class, 'blockUser'])->name('settings.block');
        Route::delete('/unblock/{user}', [SettingsController::class, 'unblockUser'])->name('settings.unblock');

        // Customer Support
        Route::get('/support', [SettingsController::class, 'support'])->name('settings.support');
        
        // Account Deactivation
        Route::get('/deactivate', [SettingsController::class, 'deactivate'])->name('settings.deactivate');
        Route::post('/deactivate', [SettingsController::class, 'processDeactivation'])->name('settings.deactivate.process');
    });
});

// Onboarding routes with just auth middleware
Route::middleware(['auth'])->prefix('onboarding')->group(function () {
    Route::get('/step1', [OnboardingController::class, 'showStep1'])->name('step1');
    Route::POST('/step1', [OnboardingController::class, 'saveStep1'])->name('step1.save');
    
    Route::get('/step2', [OnboardingController::class, 'showStep2'])->name('step2');
    Route::put('/step2', [OnboardingController::class, 'saveStep2'])->name('step2.save');
    
    Route::get('/step3', [OnboardingController::class, 'showStep3'])->name('step3');
    Route::put('/step3', [OnboardingController::class, 'saveStep3'])->name('step3.save');
    Route::get('/step4', [OnboardingController::class, 'showStep4'])->name('step4');
    Route::get('/step5', [OnboardingController::class, 'showStep5'])->name('step5');
    Route::get('/step6', [OnboardingController::class, 'showStep6'])->name('step6');
    Route::get('/step7', [OnboardingController::class, 'showStep7'])->name('step7');
    Route::get('/skip', [OnboardingController::class, 'skip'])->name('skip');
});

// Change 'guest' to ['auth', 'onboarding.check'] for protected routes
Route::middleware(['auth', 'onboarding.check'])->group(function () {
    // Profile Routes
    Route::get('/profile/{username}', [ProfileController::class, 'show'])->name('profile.show');
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::put('/profile', [ProfileController::class, 'update'])->name('profile.update');
    
    // Follow/Unfollow
    Route::post('/profile/{username}/follow', [ProfileController::class, 'follow'])->name('profile.follow');
    Route::delete('/profile/{username}/unfollow', [ProfileController::class, 'unfollow'])->name('profile.unfollow');
    
    // Followers/Following
    Route::get('/profile/{username}/followers', [ProfileController::class, 'followers'])->name('profile.followers');
    Route::get('/profile/{username}/following', [ProfileController::class, 'following'])->name('profile.following');
});
