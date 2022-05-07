<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Profile>
 */
class ProfileFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */

     
    public function definition()
    {
       \App\Models\Profile::query()->delete();
       $userIds = \App\Models\User::pluck('id');
       $faker = \Faker\Factory::create();

        return [
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email' => $faker->email(),
                'phone_number' => $faker->phoneNumber(),
                'user_id' => $userIds->random()
        ];
    }
}
