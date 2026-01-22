<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // ✅ Create an admin user
        User::create([
            'estname' => 'Meowname',
            'esttype' => 'resort',
            'email' => 'admin3@example.com',
            'password' => Hash::make('password123'),
        ]);

        // ✅ Create 10 random users using factory
        User::factory(300)->create();
    }
}
