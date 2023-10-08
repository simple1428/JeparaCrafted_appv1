<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Seller>
 */
class SellerFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->company(),
            'user_id' => fake()->numberBetween(1, 8),
            'description' => fake()->paragraph(),
            'email' => fake()->unique()->safeEmail(),
            'phone_number' => fake()->phoneNumber(),
            'logo' => null, // Anda dapat mengisi dengan data gambar jika diperlukan
            'banner' => null, // Anda dapat mengisi dengan data gambar jika diperlukan
            'address' => fake()->address(),
            'city' => fake()->city(),
            'province' => fake()->state(),
            'verified' => 0,
        ];
    }
}