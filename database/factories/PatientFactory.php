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
            "gender"=>faker()->title(),
            "age"=>faker()->age(),
            "address"=>faker()->address(),
            "civil_status"=>faker()->lastName(),
            "blood_type"=>faker()->word(),
            "medical_conditions"=>faker()->words()
        ];
    }
}
