<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Category>
 */
class CategoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            Category::create(['name' => 'sepatu futsal']),
            Category::create(['name' => 'sepatu lari']),
            Category::create(['name' => 'sepatu hiking']),
            Category::create(['name' => 'sepatu basket']),
            Category::create(['name' => 'sepatu santai']),
            Category::create(['name' => 'sepatu casual']),
            Category::create(['name' => 'sepatu formal']),
        ];
    }
}
