<?php

use App\Models\Doctor;
use App\Models\Hospital;
use App\Models\Patient;
use App\Models\Prescription;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('medical_appointments', function (Blueprint $table) {
            $table->id();
            $table->date('date');
            $table->string('description');
            $table->foreignIdFor(Hospital::class);
            $table->foreignIdFor(Patient::class);
            $table->foreignIdFor(Doctor::class);
            $table->foreignIdFor(Prescription::class)->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_appointments');
    }
};
