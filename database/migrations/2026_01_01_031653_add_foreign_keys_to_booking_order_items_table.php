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
        Schema::table('booking_order_items', function (Blueprint $table) {
            $table->foreign('booking_order_id')->references('id')->on('booking_orders')->onDelete('cascade');
            $table->foreign('booking_product_id')->references('id')->on('booking_products')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::table('booking_order_items', function (Blueprint $table) {
            $table->dropForeign(['booking_order_id']);
            $table->dropForeign(['booking_product_id']);
        });
    }
};
