<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\User\DashboardController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ContentController;
use App\Http\Controllers\EngagementController;
use App\Http\Controllers\FeedbackController;
use App\Http\Controllers\EngagementRequestController;
use App\Http\Controllers\CommunityController;
use App\Http\Controllers\MatchController;
use App\Http\Controllers\CollaborationController;
use App\Http\Controllers\ExploreController;
use App\Http\Controllers\MessageController;
use App\Http\Controllers\NotificationController;
use App\Http\Controllers\PremiumController;
use App\Http\Controllers\OnboardingController;
use App\Http\Controllers\Feed\FeedController;
use App\Mail\TestMail;
use Illuminate\Support\Facades\Mail;

// Public routes
Route::get('/', function () {
    return redirect()->route('feed.home');
})->name('home');
Route::get('/about', [HomeController::class, 'about'])->name('about');
Route::get('/privacy', [HomeController::class, 'privacy'])->name('privacy');
Route::get('/terms', [HomeController::class, 'terms'])->name('terms');

// Feed Routes


// Include other route files
require __DIR__.'/auth.php';
require __DIR__.'/user.php';
require __DIR__.'/content.php';
require __DIR__.'/engagement.php';
require __DIR__.'/community.php';
require __DIR__.'/match.php';
require __DIR__.'/explore.php';
require __DIR__.'/messaging.php';
require __DIR__.'/notifications.php';
require __DIR__.'/admin.php';
require __DIR__.'/premium.php';

// Add any additional routes that don't fit into the above categories here



