<?php

namespace Database\Factories;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Transaction>
 */
class TransactionFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'date' => $this->faker->date(), // contoh: 2025-10-07
            'user_id' => User::factory(),
            'type' => $this->faker->randomElement(['income', 'expense']), // pemasukan/pengeluaran
            'category' => $this->faker->word(), // contoh: 'food', 'transport', dll
            'amount' => $this->faker->numberBetween(10000, 1000000), // nominal
            'description' => $this->faker->sentence(), // contoh: "Beli bahan makanan."
        ];
    }
}
