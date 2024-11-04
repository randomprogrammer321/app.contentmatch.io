<?php

namespace App\Http\Controllers\Match;

use App\Http\Controllers\Controller;

class MatchController extends Controller
{
    public function index()
    {
        return view('pages.match.index');
    }

    public function matches()
    {
        // Sample matches data
        $matches = collect([
            (object)[
                'name' => 'Thomas Andrews',
                'bio' => 'Designer, Creative thinker. Passionate about crafting meaningful experiences.',
                'avatar' => asset('assets/images/home/pp-placeholder.png'),
                'contents' => collect([
                    (object)[
                        'platform' => 'youtube',
                        'media_url' => asset('assets/images/home/video-placeholder.png')
                    ],
                    (object)[
                        'platform' => 'instagram',
                        'media_url' => asset('assets/images/home/video-placeholder.png')
                    ]
                ])
            ],
            (object)[
                'name' => 'Sarah Miller',
                'bio' => 'Content Creator | Digital Artist | Sharing creative insights daily',
                'avatar' => asset('assets/images/home/placeholder-4.png'),
                'contents' => collect([
                    (object)[
                        'platform' => 'youtube',
                        'media_url' => asset('assets/images/home/video-placeholder.png')
                    ]
                ])
            ]
        ]);

        // Sample profile likes data
        $profileLikes = collect([
            (object)[
                'name' => 'Lipshutz Mira',
                'avatar' => asset('assets/images/home/pp-placeholder.png')
            ],
            (object)[
                'name' => 'Tatiana Westervelt',
                'avatar' => asset('assets/images/home/placeholder-4.png')
            ],
            (object)[
                'name' => 'Gustavo Mango',
                'avatar' => asset('assets/images/home/placeholder-5.png')
            ]
        ]);

        return view('pages.match.matches', compact('matches', 'profileLikes'));
    }

    public function pastEngagements()
    {
        // Sample past engagements data
        $engagements = collect([
            (object)[
                'name' => 'Alena Dokidis',
                'username' => 'macdonald222',
                'is_verified' => true,
                'avatar' => asset('assets/images/home/pp-placeholder.png'),
                'bio' => 'Designer, Creative thinker. Passionate about crafting meaningful experiences.',
                'created_at' => now()->subDays(5),
                'is_following' => true
            ],
            (object)[
                'name' => 'Mike Johnson',
                'username' => 'mikej_creates',
                'is_verified' => false,
                'avatar' => asset('assets/images/home/placeholder-4.png'),
                'bio' => 'Digital Artist | Content Creator | Sharing daily inspiration',
                'created_at' => now()->subDays(7),
                'is_following' => true
            ]
        ]);

        return view('pages.match.past-engagements', compact('engagements'));
    }

    public function requests()
    {
        // Sample requests data
        $requests = collect([
            (object)[
                'name' => 'Alena Dokidis',
                'username' => 'macdonald222',
                'is_verified' => true,
                'avatar' => asset('assets/images/home/pp-placeholder.png'),
                'bio' => 'Designer, Creative thinker. Passionate about crafting meaningful experiences.',
                'created_at' => now()->subDays(2),
                'status' => 'pending',
                'status_text' => 'You engaged with this creator on ' . now()->subDays(2)->format('M d, Y'),
                'status_color' => 'text-custom2'
            ],
            (object)[
                'name' => 'James Wilson',
                'username' => 'james_creates',
                'is_verified' => true,
                'avatar' => asset('assets/images/home/placeholder-4.png'),
                'bio' => 'Content Creator | Sharing creative insights and tutorials',
                'created_at' => now()->subDays(5),
                'status' => 'accepted',
                'status_text' => 'You engaged with this creator on ' . now()->subDays(5)->format('M d, Y'),
                'status_color' => 'text-success'
            ]
        ]);

        return view('pages.match.requests', compact('requests'));
    }
}
