<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use \App\Models\Profile;
 use Illuminate\Support\Facades\DB;

class GroupSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
              \App\Models\Group::query()->delete();
                $faker = \Faker\Factory::create();
                 $profiles = \App\Models\Profile::all();
                //   $profiles = \App\Models\Profile::pluck('id'); 

                //   $userIds = \App\Models\User::pluck('id');

     

       foreach (range(1,100) as $number){
           \App\Models\Group::create([
                'name' => $faker->Company()
        
  //   Factory(\App\Models\ProfileFactory::class, 100)->create();
           ]);
       }
    }
    }
