<?php

namespace Database\Seeders;

use App\Models\BookingOutcallQueue;
use Illuminate\Database\Seeder;

class BookingOutcallQueueSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create 20 sample persons with full info
        BookingOutcallQueue::factory()->count(20)->create();
    }
}
