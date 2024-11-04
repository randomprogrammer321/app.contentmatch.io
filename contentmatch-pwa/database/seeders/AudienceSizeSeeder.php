<?php

namespace Database\Seeders;

use App\Models\AudienceSize;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class AudienceSizeSeeder extends Seeder
{
    public function run(): void
    {
        $sizes = [
            [
                'name' => 'Small: 0 - 4,999',
                'min' => 0,
                'max' => 4999,
                'label' => 'Small'
            ],
            [
                'name' => 'Medium: 5,000 - 19,999',
                'min' => 5000,
                'max' => 19999,
                'label' => 'Medium'
            ],
            [
                'name' => 'Large: > 20,000',
                'min' => 20000,
                'max' => null,
                'label' => 'Large'
            ],
        ];

        foreach ($sizes as $size) {
            AudienceSize::create([
                'name' => $size['name'],
                'slug' => Str::slug($size['label']),
                'min_followers' => $size['min'],
                'max_followers' => $size['max'],
                'label' => $size['label'],
                'is_active' => true,
            ]);
        }
    }
}
