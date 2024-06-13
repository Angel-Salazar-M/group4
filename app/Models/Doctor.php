<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\Title;
use App\Models\User;
use App\Models\Prescription;
use App\Models\MedicalAppointment;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Doctor extends Model
{
    use HasFactory;

    public $timestamps = false;

    protected $guarded = [
        'id',
    ];

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }


    public function titles(): HasMany
    {
        return $this->hasMany(Title::class);
    }

    public function prescriptions(): HasMany
    {
        return $this->hasMany(Prescription::class);
    }

    public function medicalAppointments(): HasMany
    {
        return $this->HasMany(MedicalAppointment::class);
    }
}
