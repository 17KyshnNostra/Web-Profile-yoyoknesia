<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Layanan>
 */
class LayananFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama'      => $this->faker->words(2, true), // Contoh: "Wedding Video"
            'deskripsi' => $this->faker->sentence(12),   // Contoh: "Jasa videografi profesional untuk acara Anda."
            'harga'     => $this->faker->numberBetween(500000, 5000000),
            // 'icon'      => $this->faker->optional()->imageUrl(64, 64, 'business'), // Contoh url icon, nullable
        ];
    }
}
