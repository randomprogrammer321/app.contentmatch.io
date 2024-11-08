<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Support\Str;

class CategorySeeder extends Seeder
{
    public function run(): void
    {
        $categories = [
            'Gaming',
            'Vlogging',
            'Beauty & Fashion',
            'Technology',
            'Educational',
            'Fitness & Health',
            'DIY & Crafts',
            'Food & Cooking',
            'Music'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
                'is_active' => true,
            ]);
        }
    }
}
