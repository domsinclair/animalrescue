<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class Animal extends Model
{
    use HasFactory;

    public function animalType(): BelongsTo
    {
        return $this->belongsTo(Animal_Type::class,'animal_type_id');
    }

    public function rescueCentre(): BelongsTo
    {
        return $this->belongsTo(Rescue_Centre::class,'rescue_centre_id');
    }

    
}
