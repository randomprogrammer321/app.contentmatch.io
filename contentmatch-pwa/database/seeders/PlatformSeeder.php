<?php

namespace Database\Seeders;

use App\Models\Platform;
use Illuminate\Database\Seeder;

class PlatformSeeder extends Seeder
{
    public function run(): void
    {
        $platforms = [
            [
                'name' => 'YouTube',
                'icon_url' => 'assets/icons/platforms/youtube.svg',
                'is_active' => true,
            ],
            [
                'name' => 'Instagram',
                'icon_url' => 'assets/icons/platforms/instagram.svg',
                'is_active' => true,
            ],
            [
                'name' => 'TikTok',
                'icon_url' => 'assets/icons/platforms/tiktok.svg',
                'is_active' => true,
            ],
            [
                'name' => 'Discord',
                'icon_url' => 'assets/icons/platforms/discord.svg',
                'is_active' => true,
            ],
            [
                'name' => 'Twitch',
                'icon_url' => 'assets/icons/platforms/twitch.svg',
                'is_active' => true,
            ],
        ];

        foreach ($platforms as $platform) {
            Platform::create($platform);
        }
    }
}
