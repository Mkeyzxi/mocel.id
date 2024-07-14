<?php

namespace Database\Seeders;

use App\Models\Bengkel;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class BengkelSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Bengkel::factory(10)->create();
        
    }
}
