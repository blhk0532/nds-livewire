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
        Schema::table('booking_comments', function (Blueprint $table) {
            $table->foreign('customer_id')->references('id')->on('booking_customers')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('booking_comments', function (Blueprint $table) {
            $table->dropForeign(['customer_id']);
        });
    }
};
