<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {

        User::firstOrCreate(
            ['email' => 'admin@ndsth.com'],
            [
                'name' => 'admin',
                'role' => 'admin',
                'password' => 'bkkbkk',
                'email_verified_at' => now(),
            ]
        );
        User::firstOrCreate(
            ['email' => 'bokning@ndsth.com'],
            [
                'name' => 'Bokning',
                'role' => 'booking',
                'password' => 'qwe321asd',
                'email_verified_at' => now(),
            ]
        );
        User::firstOrCreate(
            ['email' => 'service1@example.com'],
            [
                'name' => 'Tekniker 1',
                'role' => 'service',
                'password' => 'qwe321asd',
                'email_verified_at' => now(),
            ]
        );
        User::firstOrCreate(
            ['email' => 'service2@example.com'],
            [
                'name' => 'Tekniker 2',
                'role' => 'service',
                'password' => 'qwe321asd',
                'email_verified_at' => now(),
            ]
        );
        User::firstOrCreate(
            ['email' => 'service3@example.com'],
            [
                'name' => 'Tekniker 3',
                'role' => 'service',
                'password' => 'qwe321asd',
                'email_verified_at' => now(),
            ]
        );
        User::firstOrCreate(
            ['email' => 'service4@example.com'],
            [
                'name' => 'Tekniker 4',
                'role' => 'service',
                'password' => 'qwe321asd',
                'email_verified_at' => now(),
            ]
        );

        // Call the plugin's seeders
        $this->call([
            BookingBrandSeeder::class,
            BookingCategorySeeder::class,
            BookingClientSeeder::class,
            BookingServiceSeeder::class,
        ]);
    }
}
