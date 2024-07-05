<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DoctorSeeder extends Seeder
{

    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $doctors = [
            [
                'medical_speciality' => 'Inmunología',
                'medical_code' => '32578',
            ],
            [
                'medical_speciality' => 'Anestesiología',
                'medical_code' => '12543'
            ],
            [
                'medical_speciality' => 'Cardiología',
                'medical_code' => '45678'
            ],
            [
                'medical_speciality' => 'Dermatología',
                'medical_code' => '98432'
            ],
            [
                'medical_speciality' => 'Medicina de Emergencias',
                'medical_code' => '27594'
            ],
            [
                'medical_speciality' => 'Endocrinología',
                'medical_code' => '38765'
            ],
            [
                'medical_speciality' => 'Medicina Familiar',
                'medical_code' => '12398'
            ],
            [
                'medical_speciality' => 'Gastroenterología',
                'medical_code' => '54321'
            ],
            [
                'medical_speciality' => 'Geriatría',
                'medical_code' => '67234'
            ],
            [
                'medical_speciality' => 'Ginecología y Obstetricia',
                'medical_code' => '75849'
            ],
            [
                'medical_speciality' => 'Hematología',
                'medical_code' => '84736'
            ],
            [
                'medical_speciality' => 'Infectología',
                'medical_code' => '93458'
            ],
            [
                'medical_speciality' => 'Medicina Interna',
                'medical_code' => '13467'
            ],
            [
                'medical_speciality' => 'Nefrología',
                'medical_code' => '29876'
            ],
            [
                'medical_speciality' => 'Neurología',
                'medical_code' => '67543'
            ],
            [
                'medical_speciality' => 'Oftalmología',
                'medical_code' => '78654'
            ],
            [
                'medical_speciality' => 'Oncología',
                'medical_code' => '65748'
            ],
            [
                'medical_speciality' => 'Ortopedia',
                'medical_code' => '87654'
            ],
            [
                'medical_speciality' => 'Otorrinolaringología',
                'medical_code' => '54329'
            ],
            [
                'medical_speciality' => 'Pediatría',
                'medical_code' => '37659'
            ],
            [
                'medical_speciality' => 'Psiquiatría',
                'medical_code' => '12897'
            ],
            [
                'medical_speciality' => 'Radiología',
                'medical_code' => '45987'
            ],
            [
                'medical_speciality' => 'Reumatología',
                'medical_code' => '98765'
            ],
            [
                'medical_speciality' => 'Urología',
                'medical_code' => '65432'
            ]
        ];
        Doctor::factory(count($doctors))->sequence(fn ($sqn) => $doctors[$sqn->index])->create();
    }
}
