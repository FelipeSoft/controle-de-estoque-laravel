<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Database\Seeders\CategorySeeder;
use App\Models\Product;
use App\Models\Supplier;
use App\Models\Transact;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        $this->call([
            CategorySeeder::class
        ]);

        User::factory(10)->create();
        Supplier::factory(20)->create();
        Product::factory(100)->create();
        Transact::factory(300)->create();
    }
}
