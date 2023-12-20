<?php

namespace Database\Factories;

use App\Models\RescueCentre;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class RescueCentreFactory extends Factory
{
    protected $model = RescueCentre::class;

    public function definition()
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
