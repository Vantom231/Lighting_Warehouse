<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    private $counter = 0;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $this->counter++;
        $comapny_name = NULL;
        $nip = NULL;
        $company_address = NULL;
        $company_mailing_address = NULL;
        $first_name = $this->faker->firstName();

        if ($this->counter <= 4) $type = 'A';
        else if ($this->counter <= 15) $type = 'W';
        else {
            $type = $this->faker->randomElement(['I', 'B']);

            if ($type == 'B') {
                $comapny_name = $this->faker->company();
                $nip = (string)$this->faker->numberBetween(1000000000, 9999999999);
                $company_address = $this->faker->streetAddress();
                $company_mailing_address = $this->faker->address();
            }
        }

        return [
            'name' => $first_name,
            'email' => $this->faker->unique()->email(),
            'email_verified_at' => now(),
            'password' => Hash::make($first_name . "1234"),
            'remember_token' => Str::random(10),
            'account_type' => $type,
            'first_name' => $first_name,
            'last_name' => $this->faker->lastName(),
            'pesel' => (string)$this->faker->numberBetween(10000000000, 99999999999),
            'mailing_address' => $this->faker->address(),
            'company_name' => $comapny_name,
            'nip' => $nip,
            'company_address' => $company_address,
            'company_mailing_address' => $company_mailing_address
        ];
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn (array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
