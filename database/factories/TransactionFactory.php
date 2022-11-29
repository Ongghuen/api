<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;
use Illuminate\Support\Arr;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'status' => Arr::random(['Pending', 'Belum_Bayar', 'Dikirim', 'Selesai']),
            'user_id' => mt_rand(32, 51),
            'total_harga' => $this->faker->randomFloat(1, 20, 30),
            'tgl_transaksi' => $this->faker->date(),
            'tgl_selesai' => $this->faker->date()
        ];
    }
}
