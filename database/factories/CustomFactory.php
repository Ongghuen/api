<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Custom>
 */
class CustomFactory extends Factory
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
            'status' => Arr::random(['Pending', 'Belum_Bayar','Pengerjaan', 'Dikirim', 'Selesai']),
            'jenis_custom' => Arr::random(['Kursi', 'Meja', 'Pagar', 'Pintu', 'Rak']),
            'bahan' => Arr::random(['Kayu Jati', 'Kayu Mahoni', 'Kaca', 'Besi', 'Alumunium']),
            'desc' => $this->faker->paragraph($nb =2),
            'dp' => $this->faker->numberBetween($min = 100000, $max = 10000000),
            'total_harga' => $this->faker->numberBetween($min = 100000, $max = 10000000)
        ];
    }
}
