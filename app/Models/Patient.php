<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\User;
use App\Models\Illness;
use App\Models\Prescription;
use App\Models\MedicalAppointment;

class Patient extends Model
{
    use HasFactory;

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }

    public function illnesses(): HasMany
    {
        return $this->hasMany(Illness::class);
    }

    public function prescriptions(): HasMany
    {
        return $this->hasMany(Prescription::class);
    }

    public function medicalAppointments(): HasMany
    {
        return $this->hasMany(MedicalAppointment::class);
    }
}
