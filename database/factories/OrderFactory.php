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
        $deliver = $this->faker->randomElement([TRUE,FALSE]);

        $deliver_address = null;
        if ($deliver == TRUE) $deliver_address = $this->faker->streetAddress();

        return [
            'post_date' => $this->faker->dateTimeThisCentury(),
            'finished' => $this->faker->randomElement([TRUE,FALSE]),
            'deliver' => $deliver,
            'deliver_address' => $deliver_address,
            'invoice' => $this->faker->randomElement([TRUE, FALSE])
        ];
    }
}
