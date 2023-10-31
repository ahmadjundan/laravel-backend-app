<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => 1,
            'seller_id' => 2,
            'number' => fake()->randomNumber(8),
            'total_price' => fake()->numberBetween(100000, 900000),
            'payment_status' => '1', // pending/waiting
        ];
    }
}
