<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Category::create(['name' => 'Sepatu Running']);
        Category::create(['name' => 'Sepatu Casual']);
        Category::create(['name' => 'Sepatu basket']);
        Category::create(['name' => 'Sepatu futsal']);
        Category::create(['name' => 'Sepatu sneakers']);
        Category::create(['name' => 'Sepatu boots']);
        Category::create(['name' => 'Sepatu formal']);
    }
}
