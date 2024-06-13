<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\MedicinePrescription;
use App\Models\Pharmacy;
use App\Models\MedicinePharmacy;
use App\Models\Prescription;

class Medicine extends Model
{
    public $timestamps = false;
    protected $guarded = [
        'id',
    ];

    use HasFactory;

    public function medicinePrescription(): BelongsTo
    {
        return $this->belongsTo(MedicinePrescription::class);
    }
    public function medicinePharmacies(): HasManyThrough
    {
        return $this->hasMany(Pharmacy::class)->using(MedicinePharmacy::class);
    }
    public function prescriptions(): HasManyThrough
    {
        return $this->hasMany(Prescription::class)->using(MedicinePrescription::class);
    }
}
