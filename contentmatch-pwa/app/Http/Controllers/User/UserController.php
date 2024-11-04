<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class UserController extends Controller
{
    /**
     * Display user's profile
     */
    public function show($username): View
    {
        // For demo, using sample data
        $user = [
            'name' => 'Alena Dokidis',
            'username' => 'macdonald222',
            'bio' => 'Designer, Creative thinker. Passionate about crafting meaningful experience. Explorer of ideas, art and life little details',
            'is_verified' => true,
            'followers_count' => '2.2M',
            'following_count' => '12k',
            'avatar' => 'assets/images/home/place-holder.svg',
            'cover' => 'assets/images/home/com-place-holder.png',
            'social_links' => [
                'instagram' => 'https://instagram.com/username',
                'youtube' => 'https://youtube.com/username',
                'tiktok' => 'https://tiktok.com/@username'
            ]
        ];

        $videos = [
            [
                'id' => 1,
                'user_name' => 'Thomas Andrews',
                'description' => 'As the final buzzer sounds, echoing through the neighborhood, the court transforms into a stage where the spirit of competition and camaraderie thrives.',
                'platform' => 'YouTube',
                'thumbnail' => 'assets/images/home/video-placeholder.png',
                'likes_count' => '12.2k',
                'feedback_count' => '12M',
                'created_at' => now()
            ],
            // Add more sample videos...
        ];

        $groups = [
            [
                'id' => 1,
                'name' => 'Newbie Artists',
                'username' => 'newbieartists',
                'description' => 'A community for aspiring artists to learn and grow together',
                'icon' => 'assets/images/home/artist.png',
                'title' => 'Digital Art Starters',
                'subtitle' => 'Digital Art Starters Channel',
                'date' => '29 April'
            ],
            // Add more sample groups...
        ];

        return view('pages.profile.show', compact('user', 'videos', 'groups'));
    }

    /**
     * Show edit profile form
     */
    public function edit(): View
    {
        return view('pages.profile.edit');
    }

    /**
     * Update user's profile
     */
    public function update(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'bio' => 'nullable|string|max:500',
            'avatar' => 'nullable|image|max:2048',
            'cover' => 'nullable|image|max:2048',
            'instagram' => 'nullable|url',
            'youtube' => 'nullable|url',
            'tiktok' => 'nullable|url'
        ]);

        // Update logic will go here
        
        return redirect()
            ->route('profile.show', auth()->user()->username)
            ->with('status', 'Profile updated successfully');
    }

    /**
     * Show user's followers
     */
    public function followers($username): View
    {
        return view('pages.profile.followers');
    }

    /**
     * Show user's following
     */
    public function following($username): View
    {
        return view('pages.profile.following');
    }

    /**
     * Follow a user
     */
    public function follow($username): RedirectResponse
    {
        return redirect()->back()->with('status', 'User followed successfully');
    }

    /**
     * Unfollow a user
     */
    public function unfollow($username): RedirectResponse
    {
        return redirect()->back()->with('status', 'User unfollowed successfully');
    }
}
