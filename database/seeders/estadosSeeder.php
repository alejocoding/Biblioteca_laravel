<?php

namespace Database\Seeders;

use App\Models\estado;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Schema;

class estadosSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        estado::create([
            'id' => 1,
            'estado' => 'Prestado'
        ]);
        estado::create([
            'id' => 2,
            'estado' => 'Disponible'
        ]);
        estado::create([
            'id' =>3,
            'estado' => 'Activo'
        ]);
        estado::create([
            'id' => 4,
            'estado' => 'Inactivo'
        ]);
    }
}
