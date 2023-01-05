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
        $user = User::factory()->create([
            'name' => 'User',
            'email' => 'user@excample.com',
            'password' => bcrypt('1'),
        ]);

        Listing::factory(34)->create([
            'user_id' => $user->id
        ]);
    }
}
