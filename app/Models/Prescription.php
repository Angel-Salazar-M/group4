<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use App\Models\Doctor;
use App\Models\Patient;
use App\Models\MedicalAppointment;
use App\Models\MedicinePrescription;
use App\Models\Medicine;


class Prescription extends Model
{
    use HasFactory;
    protected $guarded = [
        'id',
    ];

    public function doctor(): BelongsTo
    {
        return $this->belongsTo(Doctor::class);
    }

    public function patient(): BelongsTo
    {
        return $this->belongsTo(Patient::class);
    }

    public function medicalAppointments(): HasOne
    {
        return $this->hasOne(MedicalAppointment::class);
    }

    public function medicinePrescriptions(): HasMany
    {
        return $this->hasMany(MedicinePrescription::class);
    }
    public function medicines(): HasManyThrough
    {
        return $this->hasMany(Medicine::class)->using(MedicinePrescription::class);
    }
}
