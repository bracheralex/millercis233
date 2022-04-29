<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              \App\Models\Profile::query()->delete();

       $faker = \Faker\Factory::create();

       foreach (range(1,100) as $number){
           \App\Models\Profile::create([
                'first_name' => $faker->name,
                'last_name' => $faker->lastName(),
                'email' => $faker->email(),
                'phone_number' => $faker->phoneNumber()
                // 'updated_at' => $faker->dateTime,
                // 'created_at' => $faker->dateTime
           ]);
       }
    }
    }

