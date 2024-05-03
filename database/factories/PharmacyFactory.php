<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Pharmacy>
 */
class PharmacyFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "address" => fake()->address(),
            "pharmaceutical_license_number" => fake()->randomNumber(),
            "hours_of_operation" => fake()->numberBetween(0,24),
            "emergency_contact" => fake()->phoneNumber(),
        ];
    }
}
