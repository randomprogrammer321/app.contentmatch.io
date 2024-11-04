<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            PlatformSeeder::class,        // Selection: Available platforms
            CategorySeeder::class,        // Selection: Content categories
            InterestSeeder::class,        // Selection: User interests
            SupportiveCauseSeeder::class, // Selection: Available causes
            TagSeeder::class,             // Selection: Content tags
            AudienceSizeSeeder::class,    // Selection: Audience size ranges
            HashtagSeeder::class,         // Add this
            CommunityRuleTemplateSeeder::class,    // Add this
            CommunityPurposeTemplateSeeder::class, // Add this
            PurposeSeeder::class,
        ]);
    }
}
