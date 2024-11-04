<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Purpose;
use Illuminate\Support\Str;

class PurposeSeeder extends Seeder
{
    public function run(): void
    {
        $purposes = [
            'Meet new users',
            'Grow my channel',
            'Increase engagement',
            'Support community',
            'Digital Activism',
            'Boost followers'
        ];

        foreach ($purposes as $index => $purpose) {
            Purpose::create([
                'name' => $purpose,
                'slug' => Str::slug($purpose),
                'order' => $index,
                'is_active' => true
            ]);
        }
    }
} 