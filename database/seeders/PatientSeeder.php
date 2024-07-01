<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PatientSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $patient = [
            [
                'gender' => 'masculino',
                'age' => '20',
                'address' => 'Km 19 1/2, carretera el Boquerón',
                'civil_status' => 'Soltero',
                'blood_type' => 'A'
            ],
            [
                'gender' => 'femenino',
                'age' => '25',
                'address' => 'Av. Libertad 1234, Centro',
                'civil_status' => 'Casada',
                'blood_type' => 'B'
            ],
            [
                'gender' => 'masculino',
                'age' => '30',
                'address' => 'Calle 5 de Mayo 678, Colonia Roma',
                'civil_status' => 'Divorciado',
                'blood_type' => 'O'
            ],
            [
                'gender' => 'femenino',
                'age' => '35',
                'address' => 'Blvd. del Sur 4567, Las Lomas',
                'civil_status' => 'Soltera',
                'blood_type' => 'AB'
            ],
            [
                'gender' => 'masculino',
                'age' => '40',
                'address' => 'Av. Insurgentes 890, Zona Norte',
                'civil_status' => 'Casado',
                'blood_type' => 'A'
            ],
            [
                'gender' => 'femenino',
                'age' => '22',
                'address' => 'Calle Juárez 234, Colonia Centro',
                'civil_status' => 'Soltera',
                'blood_type' => 'O'
            ],
            [
                'gender' => 'masculino',
                'age' => '28',
                'address' => 'Calle Hidalgo 789, Colonia del Sol',
                'civil_status' => 'Soltero',
                'blood_type' => 'B'
            ],
            [
                'gender' => 'femenino',
                'age' => '32',
                'address' => 'Av. Reforma 345, Zona Rosa',
                'civil_status' => 'Casada',
                'blood_type' => 'AB'
            ],
            [
                'gender' => 'masculino',
                'age' => '45',
                'address' => 'Calle Universidad 456, Ciudad Universitaria',
                'civil_status' => 'Viudo',
                'blood_type' => 'A'
            ],
            [
                'gender' => 'femenino',
                'age' => '50',
                'address' => 'Av. Central 123, Centro Histórico',
                'civil_status' => 'Casada',
                'blood_type' => 'O'
            ],
            [
                'gender' => 'masculino',
                'age' => '55',
                'address' => 'Calle Norte 567, Industrial',
                'civil_status' => 'Casado',
                'blood_type' => 'B'
            ],
            [
                'gender' => 'femenino',
                'age' => '60',
                'address' => 'Blvd. Independencia 789, Villa de las Flores',
                'civil_status' => 'Viuda',
                'blood_type' => 'AB'
            ],
            [
                'gender' => 'masculino',
                'age' => '65',
                'address' => 'Av. Las Américas 234, San Miguel',
                'civil_status' => 'Divorciado',
                'blood_type' => 'A'
            ],
            [
                'gender' => 'femenino',
                'age' => '70',
                'address' => 'Calle del Valle 345, Jardines',
                'civil_status' => 'Casada',
                'blood_type' => 'O'
            ],
            [
                'gender' => 'masculino',
                'age' => '75',
                'address' => 'Av. Revolución 678, Alameda',
                'civil_status' => 'Viudo',
                'blood_type' => 'B'
            ],
            [
                'gender' => 'femenino',
                'age' => '80',
                'address' => 'Calle Morelos 890, Barrio de la Paz',
                'civil_status' => 'Viuda',
                'blood_type' => 'AB'
            ]
        ];
    }
}
