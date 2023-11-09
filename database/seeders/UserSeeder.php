<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Profile;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::factory(1)->create()->each(function ($user) {
            $profile = Profile::factory()->create();  // Creating a new profile
            $user->profile_id = $profile->id;  // Associating the profile with the user
            $user->save();  // Saving the updated user
        });    }
}
