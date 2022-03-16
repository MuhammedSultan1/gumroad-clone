<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        User::factory()->count(1)->create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'type' => User::ADMIN,
        ]);
        // Merchant Users
        User::factory()->create([
            'name'          => 'Avery User',
            'email'         => 'Avery@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::MERCHANT,
        ]);

        User::factory()->create([
            'name'          => 'Hannah User',
            'email'         => 'Hannah@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::MERCHANT,
        ]);

        User::factory()->create([
            'name'          => 'Fred User',
            'email'         => 'Fred@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::MERCHANT,
        ]);

        // Default Users
        User::factory()->create([
            'name'          => 'Max Doe',
            'email'         => 'Max@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::DEFAULT,
        ]);

        User::factory()->create([
            'name'          => 'steve Doe',
            'email'         => 'steve@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::DEFAULT,
        ]);
        User::factory()->create([
            'name'          => 'Jeff Doe',
            'email'         => 'Jeff@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::DEFAULT,
        ]);
        User::factory()->create([
            'name'          => 'patrick Doe',
            'email'         => 'patrick@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::DEFAULT,
        ]);
    }
}
