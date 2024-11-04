<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class TagSeeder extends Seeder
{
    public function run(): void
    {
        $tags = [
            'Trending',
            'Featured',
            'Must Watch',
            'Viral',
            'Educational',
            'Entertainment',
            'News',
            'Tutorial',
            'Review',
            'Behind The Scenes'
        ];

        foreach ($tags as $tag) {
            Tag::create([
                'name' => $tag,
                'slug' => Str::slug($tag),
                'type' => 'content',
                'is_trending' => false,
                'usage_count' => 0,
                'is_active' => true,
            ]);
        }
    }
}
