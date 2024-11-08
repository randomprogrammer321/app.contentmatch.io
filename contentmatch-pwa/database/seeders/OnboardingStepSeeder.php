<?php

namespace Database\Seeders;

use App\Models\OnboardingStep;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class OnboardingStepSeeder extends Seeder
{
    public function run(): void
    {
        $steps = [
            [
                'name' => 'Profile Setup',
                'slug' => 'step1',
                'description' => 'Set up your basic profile information',
                'order' => 1,
            ],
            [
                'name' => 'Social Links',
                'slug' => 'step2',
                'description' => 'Add your social media links',
                'order' => 2,
            ],
            [
                'name' => 'Interests',
                'slug' => 'step3',
                'description' => 'Select your interests',
                'order' => 3,
            ],
            [
                'name' => 'Content Details',
                'slug' => 'step4',
                'description' => 'Tell us about your content',
                'order' => 4,
            ],
            // Add other steps as needed
        ];

        foreach ($steps as $step) {
            OnboardingStep::create([
                'name' => $step['name'],
                'slug' => $step['slug'],
                'description' => $step['description'],
                'order' => $step['order'],
                'is_required' => true,
                'is_active' => true,
            ]);
        }
    }
}
