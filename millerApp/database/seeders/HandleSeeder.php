<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Collection;
use \App\Models\Handle;
 use Illuminate\Support\Facades\DB;

class HandleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Handle::query()->delete();

        $faker = \Faker\Factory::create();

        $profiles = \App\Models\Profile::all();

        $socialNetworks = ["Twitter", "Snapchat", "Tik Tok", "Instagram", "Facebook"];

                foreach($profiles as $profile) {
            # Give friend anywhere between 0 and 3 handles
            $numberOfHandles = rand(0,3);
            Collection::times($numberOfHandles, function ($number) use ($socialNetworks, $faker, $profile) {
                shuffle($socialNetworks);
                Handle::firstOrCreate([
                    'social_name' => $socialNetworks[0],
                    'name' => $faker->name,
                    'profile_id' => $profile->id
                ]);
            });
        }
    }
}
