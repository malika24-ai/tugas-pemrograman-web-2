<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Brand>
 */
class BrandFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
        'name' => fake()->company(),
        'category_id' => Category::inRandomOrder()->first()->id,
        'jenis' => fake()->randomElement(['Sepatu Olahraga', 'Sepatu Formal', 'Sepatu Kasual']),
        'tahun_berdiri' => fake()->year(),
        'status' => fake()->randomElement(['Aktif', 'Tidak Aktif']),
        ];
        
    }
        
    
}
