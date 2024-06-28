<?php

namespace Database\Seeders;

use App\Models\Doctor;
use App\Models\Patient;
use Database\Factories\HospitalFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory()->for(Doctor::factory()->make([
            'medical_speciality' => 'Inmunología',
            'medical_code' => '32578',
        ]), 'userable')->create([
            'name' => 'Angel',
            'dui' => '12345678-9',
            'birthday' => '14/10/10',
            'phoneNumber' => '1234-5678',
            'password' => 'MaytheEsUnPescado',
            'email' => 'josesitoo0608@gmail.com',
        ]);

        User::factory()->for(Patient::factory(), 'userable')->create([
            'name' => 'Angel',
            'dui' => '12345678-9',
            'birthday' => '10/10/10',
            'phoneNumber' => '1234-5678',
            'password' => 'MaytheEsUnPescado',
            'email' => 'josesitoo0608@gmail.com',
        ]);
    }
}
