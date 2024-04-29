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
            "address" => faker()->adress(),
            "pharmaceutical_license_number" => faker()->word(),
            "hours_of_operation" => faker()->time(),
            "emergency_contact" => faker()->phoneNumber(),
        ];
    }
}
