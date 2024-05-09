<?php

namespace Database\Seeders;

use App\Models\Type;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Type::factory()->create([
            'name' => 'Acero',
            'color' => '60a1b8',
        ]);
        Type::factory()->create([
            'name' => 'Agua',
            'color' => '2980ef',
        ]);
        Type::factory()->create([
            'name' => 'Bicho',
            'color' => '91a119',
        ]);
        Type::factory()->create([
            'name' => 'Dragon',
            'color' => '5061e1',
        ]);
        Type::factory()->create([
            'name' => 'Eléctrico',
            'color' => 'fac000',
        ]);
        Type::factory()->create([
            'name' => 'Fantasma',
            'color' => '704170',
        ]);
        Type::factory()->create([
            'name' => 'Fuego',
            'color' => 'e62526',
        ]);
        Type::factory()->create([
            'name' => 'Hada',
            'color' => 'ef71ef',
        ]);
        Type::factory()->create([
            'name' => 'Hielo',
            'color' => '3fd8ff',
        ]);
        Type::factory()->create([
            'name' => 'Lucha',
            'color' => 'ff8000',
        ]);
        Type::factory()->create([
            'name' => 'Normal',
            'color' => '9fa19f',
        ]);
        Type::factory()->create([
            'name' => 'Planta',
            'color' => '3fa129',
        ]);
        Type::factory()->create([
            'name' => 'Psíquico',
            'color' => 'ef4179',
        ]);
        Type::factory()->create([
            'name' => 'Roca',
            'color' => 'afa981',
        ]);
        Type::factory()->create([
            'name' => 'Siniestro',
            'color' => '493a39',
        ]);
        Type::factory()->create([
            'name' => 'Tierra',
            'color' => '915121',
        ]);
        Type::factory()->create([
            'name' => 'Veneno',
            'color' => '8f41cb',
        ]);
        Type::factory()->create([
            'name' => 'Volador',
            'color' => '81b9ef',
        ]);
    }
}
