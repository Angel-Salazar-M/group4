<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;
use App\Models\MedicalAppointment;

class Hospital extends Model
{
    public $timestamps = false;
    protected $guarded = [
        'id',
    ];

    use HasFactory;

    public function medicalAppointments(): HasMany
    {
        return $this->hasMany(MedicalAppointment::class);
    }
}
