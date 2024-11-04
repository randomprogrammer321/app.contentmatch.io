<?php

namespace App\Http\Controllers\Message;

use App\Http\Controllers\Controller;
use App\Models\Message;
use Illuminate\Http\Request;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;

class MessageController extends Controller
{
    /**
     * Display messages list
     */
    public function index(): View
    {
        // Sample conversations for demo
        $conversations = [
            [
                'id' => 1,
                'recipient_name' => 'Maria Ekstrom',
                'last_message' => 'Hey, happy to hear from you!',
                'unread' => true,
                'time' => '09:20am',
                'avatar' => 'placeholder-4.png'
            ],
            [
                'id' => 2,
                'recipient_name' => 'Talan Donin',
                'last_message' => 'Thanks for the feedback!',
                'unread' => false,
                'time' => '08:15am',
                'avatar' => 'placeholder-5.png'
            ],
            // Add more sample conversations
        ];

        return view('pages.messaging.index', compact('conversations'));
    }

    /**
     * Show message requests
     */
    public function requests(): View
    {
        return view('pages.messaging.requests');
    }

    /**
     * Show engagement requests
     */
    public function engagements(): View
    {
        return view('pages.messaging.engagements');
    }

    /**
     * Show individual conversation
     */
    public function show($id): View
    {
        // Sample messages for demo
        $messages = [
            [
                'id' => 1,
                'content' => 'Hey, happy to hear from you. Yes, I will be back in a couple of days.',
                'is_sender' => false,
                'created_at' => now()->subMinutes(30),
            ],
            [
                'id' => 2,
                'content' => 'Great🔥 That\'s a nice-design Idea. 😍👏',
                'is_sender' => true,
                'created_at' => now()->subMinutes(25),
            ],
            [
                'id' => 3,
                'content' => 'Looking forward to collaborating!',
                'is_sender' => false,
                'created_at' => now()->subMinutes(20),
            ],
            // Add more sample messages
        ];

        $conversation = [
            'id' => $id,
            'recipient_name' => 'Leo Westervelt',
            'avatar' => 'placeholder-4.png'
        ];

        return view('pages.messaging.conversation', compact('messages', 'conversation'));
    }

    /**
     * Store a new message
     */
    public function store(Request $request): RedirectResponse
    {
        return redirect()->route('messages.show', 1)
            ->with('status', 'Message sent successfully!');
    }

    /**
     * Mark message as read
     */
    public function markAsRead($id): RedirectResponse
    {
        return redirect()->back()
            ->with('status', 'Message marked as read');
    }

    /**
     * Delete a message
     */
    public function destroy($id): RedirectResponse
    {
        return redirect()->route('messages.index')
            ->with('status', 'Message deleted successfully!');
    }

    /**
     * Accept message request
     */
    public function acceptRequest($id): RedirectResponse
    {
        return redirect()->route('messages.show', $id)
            ->with('status', 'Message request accepted');
    }

    /**
     * Decline message request
     */
    public function declineRequest($id): RedirectResponse
    {
        return redirect()->route('messages.requests')
            ->with('status', 'Message request declined');
    }

    /**
     * Accept engagement request
     */
    public function acceptEngagement($id): RedirectResponse
    {
        return redirect()->route('messages.show', $id)
            ->with('status', 'Engagement request accepted');
    }

    /**
     * Decline engagement request
     */
    public function declineEngagement($id): RedirectResponse
    {
        return redirect()->route('messages.engagements')
            ->with('status', 'Engagement request declined');
    }
}
