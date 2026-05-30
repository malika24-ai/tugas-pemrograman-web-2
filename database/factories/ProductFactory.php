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
        'nama_product' => fake()->randomElement([
        'Nike Air Max',
        'Adidas Samba',
        'Puma Future'
    ]),
            'nama_pembeli' => fake()->name(),
            'jumlah' => fake()->numberBetween(1, 10),
            'merk' => fake()->randomElement(['Nike', 'Adidas', 'Puma']),
            'tgl_beli' => fake()->date(),
        ];
        
    }
}
