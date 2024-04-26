<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicinePharmacy extends Pivot
{
    use HasFactory;
    public function medicines(): HasMany
    {
        return $this->hasMany(Medicine::class);
    }
    public function pharmacies(): BelongsToMany
    {
        return $this->belongsToMany(Pharmacy::class)->using(MedicinePharmacy::class);
    }
}
