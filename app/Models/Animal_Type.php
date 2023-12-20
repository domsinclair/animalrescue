<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Animal_Type extends Model
{
    use HasFactory;

    public function animals(): HasMany
    {
        return $this->hasMany(Animal::class, 'animal_type_id');
    }
}
