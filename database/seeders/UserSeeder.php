<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Carbon\Carbon;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create Superadmin User
        $superadmin = User::create([
            'name' => 'Super Administrator',
            'email' => 'superadmin@thetametrika.com',
            'password' => Hash::make('superadmin123'),
            'email_verified_at' => Carbon::now(),
        ]);
        $superadmin->assignRole('superadmin');

        // Create Admin Users
        $admin1 = User::create([
            'name' => 'Admin Manager',
            'email' => 'admin@thetametrika.com',
            'password' => Hash::make('admin123'),
            'email_verified_at' => Carbon::now(),
        ]);
        $admin1->assignRole('admin');

        $admin2 = User::create([
            'name' => 'John Admin',
            'email' => 'john.admin@thetametrika.com',
            'password' => Hash::make('admin123'),
            'email_verified_at' => Carbon::now(),
        ]);
        $admin2->assignRole('admin');

        // Create Regular Users
        $user1 = User::create([
            'name' => 'Alice Johnson',
            'email' => 'alice.johnson@example.com',
            'password' => Hash::make('user123'),
            'email_verified_at' => Carbon::now(),
        ]);
        $user1->assignRole('user');

        $user2 = User::create([
            'name' => 'Bob Smith',
            'email' => 'bob.smith@example.com',
            'password' => Hash::make('user123'),
            'email_verified_at' => Carbon::now(),
        ]);
        $user2->assignRole('user');

        $user3 = User::create([
            'name' => 'Carol Wilson',
            'email' => 'carol.wilson@example.com',
            'password' => Hash::make('user123'),
            'email_verified_at' => Carbon::now(),
        ]);
        $user3->assignRole('user');

        $this->command->info('Users seeded successfully!');
        $this->command->info('Total users created: ' . User::count());
        $this->command->info('Superadmin: superadmin@thetametrika.com (password: superadmin123)');
        $this->command->info('Admin: admin@thetametrika.com (password: admin123)');
        $this->command->info('Users: user123 password for all regular users');
    }
}
