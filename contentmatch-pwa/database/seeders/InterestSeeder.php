<?php

namespace Database\Seeders;

use App\Models\Interest;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class InterestSeeder extends Seeder
{
    public function run(): void
    {
        $interests = [
            ['name' => 'Hobbies', 'icon' => 'openmoji_man-playing-handball'],
            ['name' => 'Games', 'icon' => 'fluent_games-32-filled'],
            ['name' => 'Passion', 'icon' => 'office-worker'],
            ['name' => 'Religion', 'icon' => 'twemoji_church'],
            ['name' => 'Dancing', 'icon' => 'noto_man-dancing'],
            ['name' => 'Writing', 'icon' => 'flat_pen'],
            ['name' => 'Nature', 'icon' => 'noto_palm-tree'],
            ['name' => 'Fashion', 'icon' => 'noto_dress'],
            ['name' => 'Travel', 'icon' => 'twemoji_airplane'],
            ['name' => 'Arts and Culture', 'icon' => 'openmoji_artist'],
            ['name' => 'Technology', 'icon' => 'twemoji_laptop'],
            ['name' => 'Health and wellbeing', 'icon' => 'fluent-emoji_health-worker']
        ];

        foreach ($interests as $interest) {
            Interest::create([
                'name' => $interest['name'],
                'slug' => Str::slug($interest['name']),
                'icon_url' => "assets/icon/emoji/{$interest['icon']}.svg",
                'is_active' => true,
            ]);
        }
    }
}
