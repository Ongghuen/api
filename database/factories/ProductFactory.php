<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Listing>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word(2),
            'harga' => $this->faker->numberBetween($min = 100000, $max = 10000000),
            'qty' => mt_rand(1, 20),
            'desc' => $this->faker->paragraph($nb =2),
            'categories' => Arr::random(['Kursi', 'Meja', 'Pagar', 'Pintu', 'Rak']),
        ];
    }
}
