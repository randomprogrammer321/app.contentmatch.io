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
                'description' => 'Set up your basic profile information',
                'order' => 1,
                'is_required' => true
            ],
            [
                'name' => 'Social Links',
                'description' => 'Connect your social media accounts',
                'order' => 2,
                'is_required' => true
            ],
            [
                'name' => 'Interests & Causes',
                'description' => 'Tell us about your interests and causes',
                'order' => 3,
                'is_required' => true
            ],
            [
                'name' => 'Content Details',
                'description' => 'Share details about your content',
                'order' => 4,
                'is_required' => true
            ],
            [
                'name' => 'Join Communities',
                'description' => 'Join relevant communities',
                'order' => 5,
                'is_required' => false
            ],
            [
                'name' => 'Follow Creators',
                'description' => 'Follow other creators',
                'order' => 6,
                'is_required' => false
            ],
            [
                'name' => 'Complete',
                'description' => 'Complete your onboarding',
                'order' => 7,
                'is_required' => true
            ],
        ];

        foreach ($steps as $step) {
            OnboardingStep::create([
                'name' => $step['name'],
                'slug' => Str::slug($step['name']),
                'description' => $step['description'],
                'order' => $step['order'],
                'is_required' => $step['is_required'],
                'is_active' => true,
            ]);
        }
    }
}
