<?php

namespace Database\Seeders;

use App\Models\Community;
use App\Models\CommunityRule;
use Illuminate\Database\Seeder;

class CommunityRuleSeeder extends Seeder
{
    public function run(): void
    {
        $defaultRules = [
            [
                'title' => 'Be Respectful',
                'description' => 'Treat all members with respect. No harassment, hate speech, or bullying will be tolerated.',
                'order' => 1
            ],
            [
                'title' => 'No Spam',
                'description' => 'Do not spam the community with repetitive content, self-promotion, or irrelevant links.',
                'order' => 2
            ],
            [
                'title' => 'Quality Content Only',
                'description' => 'Share content that adds value to the community. Low-effort posts may be removed.',
                'order' => 3
            ],
            [
                'title' => 'Stay On Topic',
                'description' => 'Keep discussions relevant to the community\'s purpose and theme.',
                'order' => 4
            ],
            [
                'title' => 'No NSFW Content',
                'description' => 'Keep all content family-friendly. No explicit, adult, or inappropriate material.',
                'order' => 5
            ],
            [
                'title' => 'Protect Privacy',
                'description' => 'Do not share personal information of others without consent.',
                'order' => 6
            ],
            [
                'title' => 'Follow Platform Guidelines',
                'description' => 'Adhere to the general platform guidelines and terms of service.',
                'order' => 7
            ],
            [
                'title' => 'Constructive Feedback',
                'description' => 'When giving feedback, be constructive and supportive. Avoid harsh criticism.',
                'order' => 8
            ],
            [
                'title' => 'Credit Original Content',
                'description' => 'Always give credit to original content creators when sharing their work.',
                'order' => 9
            ],
            [
                'title' => 'Report Violations',
                'description' => 'Help maintain the community by reporting content that violates these rules.',
                'order' => 10
            ]
        ];

        // Get all communities or create a default one if none exist
        $communities = Community::all();
        
        if ($communities->isEmpty()) {
            // Create a default community if needed for testing
            $community = Community::create([
                'name' => 'Content Creators Hub',
                'slug' => 'content-creators-hub',
                'description' => 'A community for content creators to connect and grow together',
                'owner_id' => 1, // Assuming user ID 1 exists
                'type' => 'public',
                'status' => 'active'
            ]);
            $communities = collect([$community]);
        }

        // Add rules to each community
        foreach ($communities as $community) {
            foreach ($defaultRules as $rule) {
                CommunityRule::create([
                    'community_id' => $community->id,
                    'title' => $rule['title'],
                    'description' => $rule['description'],
                    'order' => $rule['order']
                ]);
            }
        }
    }
}
