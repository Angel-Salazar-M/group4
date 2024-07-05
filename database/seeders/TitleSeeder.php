<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TitleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $title = [
            [
                'title' => 'Doctor en Medicina (MD)'
            ],
            [
                'title' => 'Licenciado en Medicina y Cirugía (MBBS)'
            ],
            [
                'title' => 'Doctor en Medicina y Cirugía (MDCM)'
            ],
            [
                'title' => 'Doctor en Osteopatía (DO)'
            ],
            [
                'title' => 'Licenciado en Enfermería (BSN)'
            ],
            [
                'title' => 'Doctor en Farmacia (PharmD)'
            ],
            [
                'title' => 'Licenciado en Ciencias de la Salud (BHS)'
            ],
            [
                'title' => 'Maestría en Salud Pública (MPH)'
            ],
            [
                'title' => 'Maestría en Administración de Servicios de Salud (MHA)'
            ],
            [
                'title' => 'Doctor en Ciencias Biomédicas (PhD)'
            ],
            [
                'title' => 'Licenciado en Nutrición y Dietética (BND)'
            ],
            [
                'title' => 'Especialista en Medicina Interna'
            ],
            [
                'title' => 'Especialista en Cardiología'
            ],
            [
                'title' => 'Especialista en Pediatría'
            ],
            [
                'title' => 'Especialista en Ginecología y Obstetricia'
            ],
            [
                'title' => 'Especialista en Neurología'
            ]
        ];
    }
}
