<?php

namespace Database\Seeders;

use App\Models\SubscriptionFeature;
use Illuminate\Database\Seeder;

class SubscriptionFeatureSeeder extends Seeder
{
    public function run(): void
    {
        $features = [
            [
                'name' => 'Advanced Analytics',
                'description' => 'Get detailed insights about your content performance',
                'limits' => ['reports_per_month' => 50],
            ],
            [
                'name' => 'Priority Matching',
                'description' => 'Get matched with high-quality creators first',
                'limits' => ['matches_per_day' => 20],
            ],
            [
                'name' => 'Custom Branding',
                'description' => 'Add your brand colors and logo',
                'limits' => null,
            ],
            [
                'name' => 'Unlimited Communities',
                'description' => 'Create and join unlimited communities',
                'limits' => ['communities' => -1],
            ],
        ];

        foreach ($features as $feature) {
            SubscriptionFeature::create($feature);
        }
    }
}
