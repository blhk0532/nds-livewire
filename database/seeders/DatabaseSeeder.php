<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Call the plugin's seeders
        $this->call([
            BookingBrandSeeder::class,
            BookingCategorySeeder::class,
            BookingClientSeeder::class,
            BookingServiceSeeder::class,
        ]);
    }
}
