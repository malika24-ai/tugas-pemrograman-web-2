<?php

namespace Database\Seeders;

use App\Models\massages;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MassagesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
            massages::factory(100)->create();
    }
}
