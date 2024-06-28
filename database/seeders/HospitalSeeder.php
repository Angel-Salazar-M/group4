<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Hospital;

class HospitalSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       // Hospital::factory(5)->create();
       $hospitals = [
        [
            'name' => 'Hospital Primero de Mayo',
            'address' => 'Km 19 1/2, carretera El Boquerón'
        ],
        [
            'name' => 'Hospital General San José',
            'address' => 'Av. Libertad 1234, Centro'
        ],
        [
            'name' => 'Clínica Santa María',
            'address' => 'Calle 5 de Mayo 678, Colonia Roma'
        ],
        [
            'name' => 'Hospital de Especialidades del Sur',
            'address' => 'Blvd. del Sur 4567, Las Lomas'
        ],
        [
            'name' => 'Centro Médico Nacional',
            'address' => 'Av. Insurgentes 890, Zona Norte'
        ],
        [
            'name' => 'Hospital Infantil La Esperanza',
            'address' => 'Calle Juárez 234, Colonia Centro'
        ],
        [
            'name' => 'Hospital Regional del Este',
            'address' => 'Calle Hidalgo 789, Colonia del Sol'
        ],
        [
            'name' => 'Clínica Buen Samaritano',
            'address' => 'Av. Reforma 345, Zona Rosa'
        ],
        [
            'name' => 'Hospital Universitario',
            'address' => 'Calle Universidad 456, Ciudad Universitaria'
        ],
        [
            'name' => 'Hospital Central',
            'address' => 'Av. Central 123, Centro Histórico'
        ],
        [
            'name' => 'Hospital del Norte',
            'address' => 'Calle Norte 567, Industrial'
        ],
        [
            'name' => 'Clínica San Rafael',
            'address' => 'Blvd. Independencia 789, Villa de las Flores'
        ],
        [
            'name' => 'Hospital Metropolitano',
            'address' => 'Av. Las Américas 234, San Miguel'
        ],
        [
            'name' => 'Clínica del Valle',
            'address' => 'Calle del Valle 345, Jardines'
        ],
        [
            'name' => 'Hospital Santa Cruz',
            'address' => 'Av. Revolución 678, Alameda'
        ],
        [
            'name' => 'Centro de Salud La Paz',
            'address' => 'Calle Morelos 890, Barrio de la Paz'
        ]
       ];
       Hospital::factory(count($hospitals))->sequence(fn ($sqn) => $hospitals[$sqn->index])->create();
    }
}
