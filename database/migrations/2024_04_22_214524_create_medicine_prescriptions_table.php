<?php

use App\Models\Medicine;
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
        Schema::create('medical_prescription', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Prescription::class);
            $table->foreignIdFor(Medicine::class);
            $table->string('description');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medical_prescriptions');
    }
};
