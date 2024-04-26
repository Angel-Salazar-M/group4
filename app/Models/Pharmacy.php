<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Pharmacy extends Model
{
    use HasFactory;

    public function user(): MorphOne
    {
        return $this->morphOne(User::class, 'userable');
    }
    public function medicinePharmacies(): HasManyThrough
    {
        return $this->hasMany(Medicine::class)->using(MedicinePharmacy::class);
    }
}
