<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            // 'judul' => $this->fake()->title,
            // 'pembuat' => $this->fake()->name,
            // 'paragpraph' => $this->fake()->Str::para

            // 'judul' => Str::slug(fake()->sentence()),
            // 'pembuat' => fake()->name,
            // 'paragraph' => fake()->paragraph(30, true),
            // 'title' => fake()->title,
            // 'pembuat' => fake()->name,
            'title' => Str::slug(fake()->sentence()),
            'writer' => fake()->name,
            'paragraph' => fake()->paragraph(30, true),
            'category' => fake()->randomElement(['Artikel','Tutorial','Tips & Trik']),
            'image' => 'rjCFtZ0x96Hv8PLuqPzjqel3FtKxyI3kN9WC9FfP.png',

        ];
    }
}
