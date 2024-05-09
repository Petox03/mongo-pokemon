<?php

namespace Database\Seeders;

use App\Models\Genre;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class GenreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Genre::factory()->create([
            'genre' => 'Macho',
            'icon' => '♂'
        ]);
        Genre::factory()->create([
            'genre' => 'Hembra',
            'icon' => '♀'
        ]);
        Genre::factory()->create([
            'genre' => 'No tiene género',
            'icon' => '?'
        ]);
    }
}
