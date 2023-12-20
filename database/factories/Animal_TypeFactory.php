<?php

namespace Database\Factories;

use App\Models\Animal_Type;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class Animal_TypeFactory extends Factory
{
    protected $model = Animal_Type::class;

    public function definition(): array
    {
        return [
            'name' => $this->faker->name(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
