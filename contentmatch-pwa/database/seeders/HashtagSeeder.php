<?php

namespace Database\Seeders;

use App\Models\Hashtag;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class HashtagSeeder extends Seeder
{
    public function run(): void
    {
        $hashtags = [
            'ContentCreator',
            'YouTuber',
            'Influencer',
            'DigitalCreator',
            'CreatorEconomy',
            'SocialMedia',
            'CreativeContent',
            'CreatorCommunity',
            'ContentStrategy',
            'CreatorLife',
            'ContentCreation',
            'DigitalMarketing',
            'CreatorTips',
            'CreatorInspiration',
            'ContentInspiration'
        ];

        foreach ($hashtags as $hashtag) {
            Hashtag::create([
                'name' => $hashtag,
                'slug' => Str::slug($hashtag),
                'usage_count' => 0,
                'is_trending' => false
            ]);
        }
    }
}
