<?php

namespace Database\Seeders;

use App\Models\CommunityPurpose;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CommunityPurposeSeeder extends Seeder
{
    public function run(): void
    {
        $purposes = [
            [
                'name' => 'Collaboration',
                'description' => 'Connect with other creators for collaborative projects',
                'icon' => 'collaboration'
            ],
            [
                'name' => 'Growth & Support',
                'description' => 'Help each other grow and provide mutual support',
                'icon' => 'growth'
            ],
            [
                'name' => 'Skill Sharing',
                'description' => 'Share knowledge, tips, and techniques',
                'icon' => 'skills'
            ],
            [
                'name' => 'Networking',
                'description' => 'Build professional connections in your niche',
                'icon' => 'network'
            ],
            [
                'name' => 'Content Feedback',
                'description' => 'Get and give feedback on content',
                'icon' => 'feedback'
            ],
            [
                'name' => 'Industry News',
                'description' => 'Stay updated with latest trends and news',
                'icon' => 'news'
            ]
        ];

        foreach ($purposes as $purpose) {
            CommunityPurpose::create([
                'name' => $purpose['name'],
                'slug' => Str::slug($purpose['name']),
                'description' => $purpose['description'],
                'icon_url' => "assets/icons/community/purposes/{$purpose['icon']}.svg",
                'is_active' => true
            ]);
        }
    }
}
