<?php

namespace Database\Factories;

use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Product>
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
        return [
        'name_pembeli' => fake()->name(),

            'name_product' => fake()->randomElement([
                'Nike Air',
                'Adidas Samba',
                'Puma Sport',
                'Converse High',
                'New Balance'
            ]),

            'jumlah' => fake()->numberBetween(1,10),
            'harga' => fake()->numberBetween(100,1000),

        ];
    }
}
