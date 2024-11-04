<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Platform;

class PlatformSeeder extends Seeder
{
    public function run()
    {
        $platforms = [
            [
                'name' => 'instagram',
                'display_name' => 'Instagram',
                'icon_path' => 'assets/icons/platforms/instagram.svg',
                'is_active' => true,
            ],
            [
                'name' => 'youtube',
                'display_name' => 'YouTube',
                'icon_path' => 'assets/icons/platforms/youtube.svg',
                'is_active' => true,
            ],
            [
                'name' => 'tiktok',
                'display_name' => 'TikTok',
                'icon_path' => 'assets/icons/platforms/tiktok.svg',
                'is_active' => true,
            ],
            [
                'name' => 'discord',
                'display_name' => 'Discord',
                'icon_path' => 'assets/icons/platforms/discord.svg',
                'is_active' => true,
            ],
            [
                'name' => 'twitter',
                'display_name' => 'Twitter',
                'icon_path' => 'assets/icons/platforms/twitter.svg',
                'is_active' => true,
            ],
        ];

        foreach ($platforms as $platform) {
            Platform::updateOrCreate(
                ['name' => $platform['name']],
                $platform
            );
        }
    }
}
