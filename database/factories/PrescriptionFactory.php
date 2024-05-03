<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Doctor;
use App\Models\Patient;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prescription>
 */
class PrescriptionFactory extends Factory
{

    public function doctors(){

        return once(function(){
            return Doctor::pluck('id');
        });
    }

    public function patients(){
        return once(function(){
            return Patient::pluck('id');
        });
    }

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "doctor_id" => $this->doctors()->random(),

        ];
    }
}
