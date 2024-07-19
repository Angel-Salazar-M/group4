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
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Influenza',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Diabetes',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Hipertensión',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Artritis',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Asma',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Bronquitis',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Neumonía',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Hepatitis',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Tuberculosis',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'VIH/SIDA',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Malaria',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Dengue',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Varicela',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Sarampión',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Rubéola',
                'patient_id' => $this->patients()->random()
            ],
            [
                'name' => 'Paperas',
                'patient_id' => $this->patients()->random()
            ]
        ];
        Illness::factory(count($Illness))->sequence(fn ($sqn) => $Illness[$sqn->index])->create();
    }
}
