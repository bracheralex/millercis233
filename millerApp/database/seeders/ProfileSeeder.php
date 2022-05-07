<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\Profile;

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

                  $userIds = \App\Models\User::pluck('id');

       $faker = \Faker\Factory::create();

       foreach (range(1,100) as $number){
           \App\Models\Profile::create([
                'first_name' => $faker->firstName(),
                'last_name' => $faker->lastName(),
                'email' => $faker->email(),
                'phone_number' => $faker->phoneNumber(),
                'user_id' => $userIds->random()
           
    //             //   $table->timestamps()

    //             // 'password' => Hash::make($faker->password)

  //   Factory(\App\Models\ProfileFactory::class, 100)->create();
           ]);
       }
    }
    }

