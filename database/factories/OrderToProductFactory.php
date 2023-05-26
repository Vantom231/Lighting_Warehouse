<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\OrderToProduct>
 */
class OrderToProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'product_id' => $this->faker->numberBetween(1,57),
            'order_id' => $this->faker->numberBetween(1,60),
            'quantity' => $this->faker->numberBetween(1,10)
        ];
    }
}
