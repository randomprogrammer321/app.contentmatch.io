<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;

class DashboardController extends Controller
{
    /**
     * Display the user's dashboard.
     */
    public function index(): View
    {
        $user = auth()->user();
        // Fetch relevant data for the dashboard
        // For example: recent activities, notifications, etc.
        
        return view('user.dashboard', compact('user'));
    }

    /**
     * Display the user's feed.
     */
    public function feed(): View
    {
        $user = auth()->user();
        // Fetch the user's personalized feed
        // This could include posts from followed users, communities, etc.
        
        return view('user.feed', compact('user'));
    }

    // Add more methods as needed for the user's main page functionality
}
