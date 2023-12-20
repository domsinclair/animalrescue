<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Faker\Generator;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(Generator $faker): void
    {
        $faker->seed(8792);

        \App\Models\Animal_Type::factory()
            ->count(2)
            ->sequence(
                ['name' => 'Dog'],
                ['name' => 'Cat'],
            )
            ->create();

        \App\Models\Rescue_Centre::factory(10)->create();

        \App\Models\Animal::factory(100)->create();
    }
}
