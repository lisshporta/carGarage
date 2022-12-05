<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Listing;
use Illuminate\Database\Seeder;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
        // User::factory(10)->create();

        $user = User::factory()->create([
            'name' => 'John',
            'email' => 'john.john@excample.com',
        ]);

        Listing::factory(15)->create([
            'user_id' => $user->id
        ]);

    }
}
