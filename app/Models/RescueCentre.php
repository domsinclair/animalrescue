<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RescueCentre extends Model
{
    use HasFactory;

    public function animals()
    {
        return $this->hasMany(Animal::class, 'rescue_centre_id');
    }
}
