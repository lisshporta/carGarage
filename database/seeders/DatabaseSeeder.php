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
        // User::factory()->create([
        //     'name' => 'Lis',
        //     'email' => 'lis.shporta@gmail.com',
        //     'password' => 'password'
        // ]);

        User::factory(10)->create();

        Listing::factory(15)->create();

    }
}
