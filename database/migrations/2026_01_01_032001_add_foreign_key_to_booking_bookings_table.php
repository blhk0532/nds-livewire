<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('booking_bookings', function (Blueprint $table) {
            $table->foreign('booking_client_id')->references('id')->on('booking_clients')->onDelete('set null');
        });
    }

    public function down(): void
    {
        Schema::table('booking_bookings', function (Blueprint $table) {
            $table->dropForeign(['booking_client_id']);
        });
    }
};
