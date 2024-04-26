<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\Pivot;
use Illuminate\Database\Eloquent\Relations\HasMany;

class MedicinePrescription extends Pivot
{
    use HasFactory;
    public function medicines(): HasMany
    {
        return $this->hasMany(Medicine::class);
    }
}
