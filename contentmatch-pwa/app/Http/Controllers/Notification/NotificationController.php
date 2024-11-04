<?php

namespace App\Http\Controllers\Notification;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class NotificationController extends Controller
{
    public function index(): View
    {
        // Sample notifications for demo
        $notifications = [
            [
                'id' => 1,
                'type' => 'comment',
                'user_name' => 'Macdonald Anyanwu',
                'user_avatar' => 'placeholder-8.png',
                'content' => 'commented on your YouTube video: This video is superb! Try to work on your audio.',
                'time' => '6:00am',
                'read' => false,
                'post' => [
                    'image' => 'video-placeholder.png',
                    'description' => 'As the final buzzer sounds, echoing through the neighborhood...'
                ]
            ],
            [
                'id' => 2,
                'type' => 'follow',
                'user_name' => 'Macdonald Anyanwu',
                'user_avatar' => 'engagement.png',
                'content' => 'followed you',
                'time' => '6:00am',
                'read' => true
            ],
            // Add more sample notifications
        ];

        return view('pages.notifications.index', compact('notifications'));
    }

    public function feedbacks(): View
    {
        // Sample feedback notifications
        $notifications = [
            [
                'id' => 1,
                'type' => 'feedback',
                'user_name' => 'Macdonald Anyanwu',
                'user_avatar' => 'placeholder-8.png',
                'content' => 'sent a feedback on your YouTube video',
                'time' => '6:00am',
                'read' => false,
                'post' => [
                    'image' => 'video-placeholder.png',
                    'description' => 'As the final buzzer sounds...'
                ]
            ]
        ];

        return view('pages.notifications.index', compact('notifications'));
    }

    public function engagements(): View
    {
        // Sample engagement notifications
        $notifications = [
            [
                'id' => 1,
                'type' => 'engagement',
                'user_name' => 'Macdonald Anyanwu',
                'user_avatar' => 'placeholder-8.png',
                'content' => 'sent engagement on your post',
                'time' => '6:00am',
                'read' => false,
                'post' => [
                    'image' => 'video-placeholder.png',
                    'description' => 'As the final buzzer sounds...'
                ]
            ]
        ];

        return view('pages.notifications.index', compact('notifications'));
    }

    public function destroy($id): RedirectResponse
    {
        return redirect()->back()->with('status', 'Notification deleted');
    }

    public function markAsRead($id): RedirectResponse
    {
        return redirect()->back()->with('status', 'Notification marked as read');
    }

    public function markAllAsRead(): RedirectResponse
    {
        return redirect()->back()->with('status', 'All notifications marked as read');
    }

    public function settings(): View
    {
        return view('pages.notifications.settings');
    }
}
