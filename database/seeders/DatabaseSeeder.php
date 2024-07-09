<?php

namespace Database\Seeders;


// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\MedicalAppointment;
use Illuminate\Database\Seeder;
use App\Models\Doctor;
use App\Models\Illness;
use App\Models\Medicine;
use App\Models\Patient;
use App\Models\Pharmacy;
use App\Models\User;
use App\Models\Title;
use App\Models\Prescription;
use App\Models\Hospital;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
           UserSeeder::class,
           // IllnessSeeder::class
        ]);


    }
}
