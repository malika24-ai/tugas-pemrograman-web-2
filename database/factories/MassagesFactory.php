<?php

namespace Database\Factories;

use App\Models\massages;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<massages>
 */
class MassagesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'pengirim' => fake()->name(),
            'penerima' => fake()->name(),
            'judul_pesan' => fake()->sentence(),
            'isi_pesan' => fake()->paragraph(),

        ];
    }
}
