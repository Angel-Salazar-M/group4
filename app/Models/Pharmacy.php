<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasManyThrough;
use Illuminate\Database\Eloquent\Relations\MorphOne;
use App\Models\User;
use App\Models\Medicine;
use App\Models\MedicinePharmacy;
class Pharmacy extends Model
{
    public $timestamps = false;
    protected $guarded = [
        'id',
    ];

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
