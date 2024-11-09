<?php

namespace App\Http\Controllers\Feed;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class FeedController extends Controller
{
    public function index()
    {
        // Demo posts data
        $posts = [
            [
                'id' => 1,
                'user' => [
                    'name' => 'Thomas Andrews',
                    'username' => '@thomas222',
                    'avatar' => 'assets/images/home/pp-placeholder.png'
                ],
                'content' => 'As the final buzzer sounds, echoing through the neighborhood, the court transforms into a stage where the spirit of competition and camaraderie thrives.',
                'image' => 'assets/images/home/video-placeholder.png',
                'platform' => 'youtube',
                'likes' => '12.2k',
                'feedbacks' => '12M'
            ],
            [
                'id' => 2,
                'user' => [
                    'name' => 'David Herwitz',
                    'username' => '@david123',
                    'avatar' => 'assets/images/home/placeholder-1.png'
                ],
                'content' => 'Creating content that inspires and connects with people around the world.',
                'image' => 'assets/images/home/video-placeholder.png',
                'platform' => 'instagram',
                'likes' => '8.5k',
                'feedbacks' => '5M'
            ]
        ];

        return view('pages.home.index', [
            'posts' => $posts,
            'activeTab' => 'home'
        ]);
    }

    public function following() //feed/following url route
    {
        // Demo following posts data
        $posts = [
            [
                'id' => 1,
                'user' => [
                    'name' => 'Thomas Andrews',
                    'username' => '@thomas222',
                    'avatar' => 'assets/images/home/pp-placeholder.png'
                ],
                'content' => 'As the final buzzer sounds, echoing through the neighborhood, the court transforms into a stage where the spirit of competition and camaraderie thrives.',
                'image' => 'assets/images/home/video-placeholder.png',
                'platform' => 'youtube',
                'likes' => '12.2k',
                'feedbacks' => '12M'
            ],
            [
                'id' => 2,
                'user' => [
                    'name' => 'David Herwitz',
                    'username' => '@david123',
                    'avatar' => 'assets/images/home/placeholder-1.png'
                ],
                'content' => 'Creating content that inspires and connects with people around the world.',
                'image' => 'assets/images/home/video-placeholder.png',
                'platform' => 'instagram',
                'likes' => '8.5k',
                'feedbacks' => '5M'
            ]
        ];

        return view('pages.home.index', [
            'posts' => $posts,
            'activeTab' => 'following'
        ]);
    }

    public function communities() //feed/communities url route
    {
        // Demo following posts data
        $posts = [
            [
                'id' => 1,
                'user' => [
                    'name' => 'Thomas Andrews',
                    'username' => '@thomas222',
                    'avatar' => 'assets/images/home/pp-placeholder.png'
                ],
                'content' => 'As the final buzzer sounds, echoing through the neighborhood, the court transforms into a stage where the spirit of competition and camaraderie thrives.',
                'image' => 'assets/images/home/video-placeholder.png',
                'platform' => 'youtube',
                'likes' => '12.2k',
                'feedbacks' => '12M'
            ],
            [
                'id' => 2,
                'user' => [
                    'name' => 'David Herwitz',
                    'username' => '@david123',
                    'avatar' => 'assets/images/home/placeholder-1.png'
                ],
                'content' => 'Creating content that inspires and connects with people around the world.',
                'image' => 'assets/images/home/video-placeholder.png',
                'platform' => 'instagram',
                'likes' => '8.5k',
                'feedbacks' => '5M'
            ]
        ];

        return view('pages.home.index', [
            'posts' => $posts,
            'activeTab' => 'following'
        ]);
    }
}