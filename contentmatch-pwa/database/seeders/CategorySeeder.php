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
            'Music',
            'Travel',
            'Lifestyle',
            'Comedy',
            'Business',
            'Art & Design',
            'Photography'
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category,
                'slug' => Str::slug($category),
                'icon_url' => 'assets/icons/categories/' . Str::slug($category) . '.svg',
                'is_active' => true,
            ]);
        }
    }
}
