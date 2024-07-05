<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PharmacySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $pharmacy = [
            [
                'address' => 'km 19 1/2, carretera el boqueron',
                'pharmaceutical_license_number' => 'PH123456',
                'hours_of_operation' => '24 horas',
                'emergency_contact' => '1234-5678'
            ],
            [
                'address' => 'Av. Libertad 1234, Centro',
                'pharmaceutical_license_number' => 'PH654321',
                'hours_of_operation' => '8:00 - 22:00',
                'emergency_contact' => '2345-6789'
            ],
            [
                'address' => 'Calle 5 de Mayo 678, Colonia Roma',
                'pharmaceutical_license_number' => 'PH234567',
                'hours_of_operation' => '9:00 - 21:00',
                'emergency_contact' => '3456-7890'
            ],
            [
                'address' => 'Blvd. del Sur 4567, Las Lomas',
                'pharmaceutical_license_number' => 'PH765432',
                'hours_of_operation' => '24 horas',
                'emergency_contact' => '4567-8901'
            ],
            [
                'address' => 'Av. Insurgentes 890, Zona Norte',
                'pharmaceutical_license_number' => 'PH345678',
                'hours_of_operation' => '7:00 - 23:00',
                'emergency_contact' => '5678-9012'
            ],
            [
                'address' => 'Calle Juárez 234, Colonia Centro',
                'pharmaceutical_license_number' => 'PH876543',
                'hours_of_operation' => '8:00 - 20:00',
                'emergency_contact' => '6789-0123'
            ],
            [
                'address' => 'Calle Hidalgo 789, Colonia del Sol',
                'pharmaceutical_license_number' => 'PH456789',
                'hours_of_operation' => '24 horas',
                'emergency_contact' => '7890-1234'
            ],
            [
                'address' => 'Av. Reforma 345, Zona Rosa',
                'pharmaceutical_license_number' => 'PH987654',
                'hours_of_operation' => '9:00 - 22:00',
                'emergency_contact' => '8901-2345'
            ],
            [
                'address' => 'Calle Universidad 456, Ciudad Universitaria',
                'pharmaceutical_license_number' => 'PH567890',
                'hours_of_operation' => '7:00 - 21:00',
                'emergency_contact' => '9012-3456'
            ],
            [
                'address' => 'Av. Central 123, Centro Histórico',
                'pharmaceutical_license_number' => 'PH098765',
                'hours_of_operation' => '24 horas',
                'emergency_contact' => '0123-4567'
            ],
            [
                'address' => 'Calle Norte 567, Industrial',
                'pharmaceutical_license_number' => 'PH678901',
                'hours_of_operation' => '6:00 - 22:00',
                'emergency_contact' => '1234-5678'
            ],
            [
                'address' => 'Blvd. Independencia 789, Villa de las Flores',
                'pharmaceutical_license_number' => 'PH109876',
                'hours_of_operation' => '24 horas',
                'emergency_contact' => '2345-6789'
            ],
            [
                'address' => 'Av. Las Américas 234, San Miguel',
                'pharmaceutical_license_number' => 'PH789012',
                'hours_of_operation' => '8:00 - 20:00',
                'emergency_contact' => '3456-7890'
            ],
            [
                'address' => 'Calle del Valle 345, Jardines',
                'pharmaceutical_license_number' => 'PH210987',
                'hours_of_operation' => '9:00 - 22:00',
                'emergency_contact' => '4567-8901'
            ],
            [
                'address' => 'Av. Revolución 678, Alameda',
                'pharmaceutical_license_number' => 'PH890123',
                'hours_of_operation' => '24 horas',
                'emergency_contact' => '5678-9012'
            ],
            [
                'address' => 'Calle Morelos 890, Barrio de la Paz',
                'pharmaceutical_license_number' => 'PH321098',
                'hours_of_operation' => '7:00 - 23:00',
                'emergency_contact' => '6789-0123'
            ]
        ];
    }
}
