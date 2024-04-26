<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;

class Medicine extends Model
{
    use HasFactory;

    public function medicinePrescription(): BelongsTo
    {
        return $this->belongsTo(MedicinePrescription::class);
    }
    public function medicinePharmacies(): HasManyThrough
    {
        return $this->hasMany(Pharmacy::class)->using(MedicinePharmacy::class);
    }
}
