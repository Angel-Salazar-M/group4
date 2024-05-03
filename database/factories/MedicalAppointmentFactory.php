<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Hospital;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\MedicalAppointment>
 */
class MedicalAppointmentFactory extends Factory
{

    public function hospitals(){

        return once(function(){
            return Hospital::pluck('id');
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
            "date"=> fake()->date(),
            "description" => fake()->paragraph(),
            "hospital_id" => $this->hospitals()->random(),
        ];
    }
}
