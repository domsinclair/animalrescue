<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Animal extends Model
{
    use HasFactory;

    public function animalType()
    {
        return $this->belongsTo(AnimalType::class);
    }

    public function rescueCentre()
    {
        return $this->belongsTo(RescueCentre::class);
    }
}
