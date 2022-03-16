<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
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
        User::factory()->count(1)->create([
            'first_name' => 'Admin',
            'last_name' => 'User',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'type' => User::ADMIN,
        ]);
        // Merchant Users
        User::factory()->create([
            'first_name' => 'Avery',
            'last_name' => 'User',
            'email'         => 'Avery@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::MERCHANT,
        ]);

        User::factory()->create([
            'first_name' => 'Hannah',
            'last_name' => 'User',
            'email'         => 'Hannah@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::MERCHANT,
        ]);

        User::factory()->create([
            'first_name' => 'Fred',
            'last_name' => 'User',
            'email'         => 'Fred@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::MERCHANT,
        ]);

        // Default Users
        User::factory()->create([
            'first_name' => 'Max',
            'last_name' => 'User',
            'email'         => 'Max@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::DEFAULT,
        ]);

        User::factory()->create([
            'first_name' => 'steve',
            'last_name' => 'User',
            'email'         => 'steve@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::DEFAULT,
        ]);
        User::factory()->create([
            'first_name' => 'Jeff',
            'last_name' => 'User',
            'email'         => 'Jeff@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::DEFAULT,
        ]);
        User::factory()->create([
            'first_name' => 'patrick',
            'last_name' => 'User',
            'email'         => 'patrick@example.com',
            'password'      => bcrypt('password'),
            'type'          => User::DEFAULT,
        ]);
    }
}
