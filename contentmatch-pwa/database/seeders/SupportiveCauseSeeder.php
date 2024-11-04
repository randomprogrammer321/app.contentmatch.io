<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\SupportiveCause;
use Illuminate\Support\Str;

class SupportiveCauseSeeder extends Seeder
{
    public function run(): void
    {
        $causes = [
            'Gender Equality',
            'LGBTQ Rights',
            'Climate Change',
            'Mental Health Awareness',
            'Black Lives Matter',
            'Poverty Alleviation'
        ];

        foreach ($causes as $index => $cause) {
            SupportiveCause::create([
                'name' => $cause,
                'slug' => Str::slug($cause),
                'order' => $index,
                'is_active' => true
            ]);
        }
    }
}
