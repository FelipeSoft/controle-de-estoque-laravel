<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Supplier;
use App\Models\Category;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $supplier = Supplier::all()->random();
        $category = Category::all()->random();

        return [
            'name' => $this->faker->text(50),
            'description' => $this->faker->text(100),
            'price' => $this->faker->randomFloat(2, 50, 10000),
            'min_stock' => $this->faker->numberBetween(10, 100),
            'supplier_id' => $supplier['id'],
            'category_id' => $category['id'],
        ];
    }
}
