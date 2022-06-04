<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class GroupProfile extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
     // Using models and association
        // $groups = \App\Models\Group::all();
        // \App\Models\Profile::all()->each(function ($profile) use ($groups) {
        //      $profile->groups()->attach(
        //          $groups->random(rand(0, 3))->pluck('id')->toArray()
        //      );
        // });


        // Using ids 
        $faker = \Faker\Factory::create();

        // Clear table of all records
        DB::table('group_profile')->truncate();

        $groupIds = \App\Models\Group::pluck('id');
        $profileIds = \App\Models\Profile::pluck('id');

        // Iterate over each profile
        foreach($profileIds as $profileId) {
            $amountToAssociate = rand(0,3);

            if($amountToAssociate > 0) {
                $shuffled = $groupIds->shuffle();
                $slicedGroupIds = $shuffled->slice(0, $amountToAssociate);

                // insert records
                foreach($slicedGroupIds as $groupId) {
                    Db::table('group_profile')->insert(['profile_id'=>$profileId, 'group_id'=>$groupId]);
                }
            }
        }



    }
}
