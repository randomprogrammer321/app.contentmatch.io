<?php

namespace Database\Seeders;

use App\Models\CommunityPurposeTemplate;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CommunityPurposeTemplateSeeder extends Seeder
{
    public function run(): void
    {
        $purposes = [
            [
                'name' => 'Content Collaboration',
                'description' => 'Connect with creators for collaborative projects and content creation.',
                'icon' => 'collaboration'
            ],
            [
                'name' => 'Growth & Support',
                'description' => 'Help each other grow audiences and provide mutual support.',
                'icon' => 'growth'
            ],
            [
                'name' => 'Skill Development',
                'description' => 'Learn and share content creation skills and techniques.',
                'icon' => 'skills'
            ],
            [
                'name' => 'Networking',
                'description' => 'Build professional connections with other creators.',
                'icon' => 'network'
            ],
            [
                'name' => 'Content Feedback',
                'description' => 'Share and receive feedback on content and ideas.',
                'icon' => 'feedback'
            ],
            [
                'name' => 'Industry Discussion',
                'description' => 'Discuss trends, strategies, and industry news.',
                'icon' => 'discussion'
            ]
        ];

        foreach ($purposes as $purpose) {
            CommunityPurposeTemplate::create([
                'name' => $purpose['name'],
                'slug' => Str::slug($purpose['name']),
                'description' => $purpose['description'],
                'icon_url' => "assets/icons/community/purposes/{$purpose['icon']}.svg",
                'is_active' => true
            ]);
        }
    }
}
