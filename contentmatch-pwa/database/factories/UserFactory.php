<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

class UserFactory extends Factory
{
    protected $model = User::class;

    public function definition(): array
    {
        return [
            'username' => $this->faker->unique()->userName(),
            'email' => $this->faker->unique()->safeEmail(),
            'full_name' => $this->faker->name(),
            'bio' => $this->faker->sentence(),
            'profile_image_url' => null,
            'banner_url' => null,
            'dob' => $this->faker->date(),
            'gender' => $this->faker->randomElement(['M', 'F', 'OTHER']),
            'status' => 'active',
            'google_id' => null,
            'discord_id' => null,
            'email_verified_at' => now(),
            'onboarding_completed_at' => null,
            'remember_token' => Str::random(10),
        ];
    }

    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
