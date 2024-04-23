<?php

use App\Models\Medicine;
use App\Models\Pharmacy;
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
        Schema::create('medicine_pharmacy', function (Blueprint $table) {
            $table->id();
            $table->foreignIdFor(Pharmacy::class);
            $table->foreignIdFor(Medicine::class);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('medicine_pharmacy');
    }
};
