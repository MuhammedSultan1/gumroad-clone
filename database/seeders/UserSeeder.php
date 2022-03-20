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
            'name' => 'Admin',
            'email' => 'admin@example.com',
            'password' => bcrypt('password'),
            'user_type' => User::ADMIN,
        ]);
        // Merchant Users
        User::factory()->create([
            'name' => 'Avery',
            'email'         => 'Avery@example.com',
            'password'      => bcrypt('password'),
            'user_type'          => User::BASIC_MERCHANT,
        ]);

        User::factory()->create([
            'name' => 'Hannah',
            'email'         => 'Hannah@example.com',
            'password'      => bcrypt('password'),
            'user_type'          => User::PRO_MERCHANT,
        ]);

        User::factory()->create([
            'name' => 'Fred',
            'email'         => 'Fred@example.com',
            'password'      => bcrypt('password'),
            'user_type'          => User::ENTERPRISE_MERCHANT,
        ]);

        // Default Users
        User::factory()->create([
            'name' => 'Max',
            'email'         => 'Max@example.com',
            'password'      => bcrypt('password'),
            'user_type'          => User::DEFAULT,
        ]);

        User::factory()->create([
            'name' => 'steve',
            'email'         => 'steve@example.com',
            'password'      => bcrypt('password'),
            'user_type'          => User::DEFAULT,
        ]);
        User::factory()->create([
            'name' => 'Jeff',
            'email'         => 'Jeff@example.com',
            'password'      => bcrypt('password'),
            'user_type'          => User::DEFAULT,
        ]);
        User::factory()->create([
            'name' => 'patrick',
            'email'         => 'patrick@example.com',
            'password'      => bcrypt('password'),
            'user_type'          => User::DEFAULT,
        ]);
    }
}
