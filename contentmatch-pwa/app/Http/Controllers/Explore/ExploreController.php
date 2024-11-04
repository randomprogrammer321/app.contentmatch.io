<?php

namespace App\Http\Controllers\Explore;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ExploreController extends Controller
{
    /**
     * Display the explore page
     */
    public function index()
    {
        // Demo content for presentation
        $forYouContent = [
            [
                'creator_name' => 'Thomas Andrews',
                'description' => 'As the final buzzer sounds, echoing through the neighborhood, the court transforms into a stage where the spirit of competition and camaraderie thrives.',
                'platform' => 'instagram',
                'image' => 'assets/images/home/video-placeholder.png',
                'likes' => '12.2k',
                'feedback_count' => '12M'
            ],
            [
                'creator_name' => 'Sarah Wilson',
                'description' => 'Creating art is not just about the end result, its about the journey and the stories we tell along the way. Here my latest piece exploring urban landscapes.',
                'platform' => 'youtube',
                'image' => 'assets/images/home/video-placeholder.png',
                'likes' => '8.5k',
                'feedback_count' => '5.2M'
            ],
            [
                'creator_name' => 'Mike Johnson',
                'description' => 'Tech ',
                'platform' => 'tiktok',
                'image' => 'assets/images/home/video-placeholder.png',
                'likes' => '15.7k',
                'feedback_count' => '9.1M'
            ]
        ];

        return view('pages.explore.index', [
            'forYouContent' => $forYouContent
        ]);
    }
}
