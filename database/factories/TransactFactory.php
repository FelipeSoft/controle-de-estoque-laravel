<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Product;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transact>
 */
class TransactFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = collect(['Entrada', 'Saída']);
        $product = Product::all()->random();
        return [
            'type' => $type->random(),
            'quantity' => $this->faker->numberBetween(1, 999),
            'product_id' => $product['id']
        ];
    }
}
