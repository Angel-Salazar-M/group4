<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Medicine>
 */
class MedicineFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            "date"=> fake()->date(),
            "description"=> fake()->paragraph(),
            "presentation"=> fake()->randomElements(['Inyectable','Inyectable','Dosis']),
            "dosage"=> fake()->randomElements(['1 cucharada de cafe','1 cucharada de postre','1 gota','20 gotas','60 microgotas', '1kg', '1g','1mg','1l','1ml'])
        ];
    }
}
