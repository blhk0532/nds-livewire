<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

return new class extends Migration
{
    public function up(): void
    {
        DB::statement(<<<'SQL'
            ALTER TABLE booking_bookings
            MODIFY status ENUM('new','booked','confirmed','processing','cancelled','updated','complete')
            DEFAULT 'new'
        SQL);
    }

    public function down(): void
    {
        DB::statement(<<<'SQL'
            ALTER TABLE booking_bookings
            MODIFY status ENUM('booked','confirmed','processing','cancelled','updated','complete')
            DEFAULT 'booked'
        SQL);
    }
};
