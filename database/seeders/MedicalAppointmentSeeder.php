<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MedicalAppointmentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $medical = [
            [
                'date' => '22/10/24',
                'description' => 'Consulta médica de rutina para seguimiento de la enfermedad.'
            ],
            [
                'date' => '25/10/24',
                'description' => 'Tratamiento médico para síntomas de gripe.'
            ],
            [
                'date' => '28/10/24',
                'description' => 'Consulta con especialista en dermatología.'
            ],
            [
                'date' => '30/10/24',
                'description' => 'Examen de control para pacientes con diabetes.'
            ],
            [
                'date' => '02/11/24',
                'description' => 'Consulta de seguimiento para pacientes con hipertensión.'
            ],
            [
                'date' => '05/11/24',
                'description' => 'Revisión y ajuste de tratamiento para pacientes con asma.'
            ],
            [
                'date' => '10/11/24',
                'description' => 'Evaluación y plan de tratamiento para paciente con cáncer.'
            ],
            [
                'date' => '15/11/24',
                'description' => 'Consulta para paciente con bronquitis crónica.'
            ],
            [
                'date' => '20/11/24',
                'description' => 'Control y seguimiento de paciente con neumonía.'
            ],
            [
                'date' => '25/11/24',
                'description' => 'Revisión y ajuste de tratamiento para artritis.'
            ],
            [
                'date' => '28/11/24',
                'description' => 'Consulta con psicólogo para paciente con depresión.'
            ],
            [
                'date' => '02/12/24',
                'description' => 'Evaluación y diagnóstico inicial para paciente con Alzheimer.'
            ],
            [
                'date' => '05/12/24',
                'description' => 'Consulta y tratamiento para paciente con migraña crónica.'
            ],
            [
                'date' => '10/12/24',
                'description' => 'Control de síntomas y ajuste de dieta para paciente con gastritis.'
            ],
            [
                'date' => '15/12/24',
                'description' => 'Consulta y análisis de sangre para paciente con anemia.'
            ],
            [
                'date' => '20/12/24',
                'description' => 'Seguimiento y revisión para paciente con insuficiencia renal.'
            ]
        ];
    }
}
