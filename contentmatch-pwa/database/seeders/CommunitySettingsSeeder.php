<?php

namespace Database\Seeders;

use App\Models\CommunitySettings;
use App\Models\Community;
use Illuminate\Database\Seeder;

class CommunitySettingsSeeder extends Seeder
{
    public function run(): void
    {
        $defaultSettings = [
            'basic' => [
                'daily_post_limit' => 3,
                'weekly_engagement_requirement' => 5,
                'min_engagement_to_post' => 2,
                'content_approval_required' => false,
                'member_approval_required' => false,
            ],
            'pro' => [
                'daily_post_limit' => 5,
                'weekly_engagement_requirement' => 10,
                'min_engagement_to_post' => 5,
                'content_approval_required' => true,
                'member_approval_required' => true,
            ],
            'premium' => [
                'daily_post_limit' => 10,
                'weekly_engagement_requirement' => 15,
                'min_engagement_to_post' => 8,
                'content_approval_required' => true,
                'member_approval_required' => true,
            ]
        ];

        // Get all communities
        $communities = Community::all();
        
        foreach ($communities as $community) {
            // Assign random tier settings for testing
            $tier = array_rand($defaultSettings);
            $settings = $defaultSettings[$tier];
            
            CommunitySettings::create([
                'community_id' => $community->id,
                'daily_post_limit' => $settings['daily_post_limit'],
                'weekly_engagement_requirement' => $settings['weekly_engagement_requirement'],
                'min_engagement_to_post' => $settings['min_engagement_to_post'],
                'content_approval_required' => $settings['content_approval_required'],
                'member_approval_required' => $settings['member_approval_required'],
                'tier' => $tier
            ]);
        }
    }
}
