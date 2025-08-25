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
        // First, seed roles (must be created before users)
        $this->call([
            RoleSeeder::class,
        ]);

        // Then seed users and assign roles
        $this->call([
            UserSeeder::class,
        ]);

        $this->command->info('Database seeding completed!');
    }
}
