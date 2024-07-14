<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Bengkel>
 */
class BengkelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'workshop_name' => fake()->name(),
            'address' => fake()->address(),
            'rating' => 5,
            'ability' => fake()->paragraph(24),
            'google_maps' => fake()->word(), // Atau metode lain yang sesuai
            'city' => fake()->city(),
            'workshop_category' => fake()->randomElement(['specialist', 'official']), // Sesuaikan dengan ENUM di basis data
            'workshop_image' => '72xrPNVO5UqU5aAkIz80A3bTrKgKwrfyNb5CAidO'
        ];
        
    }
}
