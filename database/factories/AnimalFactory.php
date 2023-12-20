<?php

namespace Database\Factories;

use App\Models\Animal;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

class AnimalFactory extends Factory
{
    protected $model = Animal::class;

    public function definition(): array
    {
        $animalType = $this->faker->numberBetween(1, 2);
        $canFoster = $this->faker->boolean();
        $animal = [
            'name' => $this->faker->name(),
            'animal_type_id'=>$animalType,
            'rescue_centre_id'=>$this->faker->numberBetween(1, 10),
            'gender' => $this->faker->randomElement($array = array('Male','Female')),
            'neutered' => $this->faker->boolean(90),
            'description' => $this->faker->realText(),
            'available_to_foster' => $canFoster,
            'additional_information' => $this->faker->realText(),
            'created_at' => Carbon::now(),
            'updated_at' => Carbon::now(),
        ];
        if($animalType === 1) {
            $animal['breed'] = $this->faker->randomElement($array = array('Greyhound', 'Deerhound', 'Lurcher'));
        }
        else{
            $animal['breed'] = $this->faker->randomElement($array = array('British Shorthair', 'Bengal','Mixed Breed'));
        }


        if ($canFoster=== False){
            $animal['available_to_adopt']= $canFoster;
        }else
        {
            $animal['available_to_adopt']= $this->faker->boolean();
        }

        return $animal;
    }
}
