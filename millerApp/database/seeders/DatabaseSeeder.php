<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
            //  $this->call(ProfileSeeder::class);

                     $this->call([
            UserSeeder::class,
            ProfileSeeder::class,
            HandleSeeder::class,
            GroupSeeder::class,
            GroupProfile::class
        ]);
       
    }
}
