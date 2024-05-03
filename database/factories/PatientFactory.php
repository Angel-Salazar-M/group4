<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Patient>
 */
class PatientFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "gender"=>fake()->boolean() ? "Male" : "Female",
            "age"=>fake()->numberBetween(3, 70),
            "address"=>fake()->address(),
            "civil_status"=>fake()->randomElement([
            'Solter@',
            'Casad@',
            'Viud@'
        ]),
            "blood_type"=>fake()->randomElement([
            'A+',
            'A-',
            'B+',
            'B-',
            'AB+',
            'AB-',
            'O+',
            'O-'
            ])
        ];
    }
}
