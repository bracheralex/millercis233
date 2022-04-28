<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              \App\Models\User::query()->delete();

       $faker = \Faker\Factory::create();

       foreach (range(1,100) as $number){
           \App\Models\User::create([

                'name' => $faker->Name(),
                'email' => $faker->email(),
                'password' => Hash::make($faker->password)
          

                // $table->timestamps();



                // 'password' => Hash::make($faker->password)
           ]);
       }
    }
    }

