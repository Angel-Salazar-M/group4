<?php

namespace Database\Seeders;

use App\Models\Illness;
use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IllnessSeeder extends Seeder
{
    public function patients() {
        return once( function () {
            return Patient::pluck('id');
        });
    }
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $Illness = [
            [
                'name' => 'Coronavirus',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Influenza',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Diabetes',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Hipertensión',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Artritis',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Asma',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Bronquitis',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Neumonía',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Hepatitis',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Tuberculosis',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'VIH/SIDA',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Malaria',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Dengue',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Varicela',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Sarampión',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Rubéola',
                'patient_id' => $this->patients()->random()->id
            ],
            [
                'name' => 'Paperas',
                'patient_id' => $this->patients()->random()->id
            ]
        ];
        Illness::factory(count($Illness))->sequence(fn ($sqn) => $Illness[$sqn->index])->create();
    }
}
