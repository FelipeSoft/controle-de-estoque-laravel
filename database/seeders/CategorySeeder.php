<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategorySeeder extends Seeder
{

    public function run(): void
    {
        for($i = 1; $i <= 5; $i++){
            DB::table('categories')->insert([
                'name' => 'Categoria ' . $i,
                'created_at' => now('America/Sao_Paulo'),
                'updated_at' => now('America/Sao_Paulo'),
            ]);
        }
    }
}
