<?php

namespace Database\Seeders;

use App\Models\UserPreference;
use Illuminate\Database\Seeder;

class UserPreferenceSeeder extends Seeder
{
    public function run(): void
    {
        $defaultPreferences = [
            'notification_preferences' => [
                'email_notifications' => true,
                'push_notifications' => true,
                'engagement_notifications' => true,
                'match_notifications' => true,
                'community_notifications' => true,
            ],
            'feed_preferences' => [
                'show_trending' => true,
                'show_recommended' => true,
                'content_types' => ['all'],
            ],
            'privacy_settings' => [
                'profile_visibility' => 'public',
                'show_online_status' => true,
                'allow_messages' => true,
            ],
        ];

        // This would typically be created when a user registers
        // but useful for testing
        UserPreference::create([
            'user_id' => 1,
            'show_email' => false,
            'show_stats' => true,
            'allow_messages' => true,
            'allow_mentions' => true,
            'notification_preferences' => $defaultPreferences['notification_preferences'],
            'feed_preferences' => $defaultPreferences['feed_preferences'],
            'privacy_settings' => $defaultPreferences['privacy_settings'],
        ]);
    }
}
