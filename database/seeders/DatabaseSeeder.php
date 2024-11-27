<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        User::create([
            'username' => 'admin',
            'role' => 'admin',
            'password' => bcrypt('123123'),
        ]);

        User::create([
            'username' => 'guru',
            'role' => 'guru',
            'password' => bcrypt('123123'),
        ]);

        User::create([
            'username' => 'murid',
            'role' => 'murid',
            'password' => bcrypt('123123'),
        ]);
    }
}
