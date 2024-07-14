<?php

namespace Database\Seeders;

use App\Models\Artikel;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ArtikelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Artikel::factory(10)->create();
        // Artikel::factory(10)->create();
        Artikel::factory(5)->create();
    }
}

