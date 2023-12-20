<?php

namespace Database\Factories;

use App\Models\Rescue_Centre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class Rescue_CentreFactory extends Factory
{
    protected $model = Rescue_Centre::class;

    public function definition(): array
    {
        $town = $this->faker->city();
        return [

            'name' => $town.' Animal Rescue Centre',
            'location' => $town,
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
    }
}
