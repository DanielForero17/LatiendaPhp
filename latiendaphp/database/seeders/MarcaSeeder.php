<?php

namespace Database\Seeders;

use App\Models\Categoria;
use App\Models\Marca;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategoriaSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       Categoria::factory(50)->create();
       Marca::factory(50)->create();
    }
}