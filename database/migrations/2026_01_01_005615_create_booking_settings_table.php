<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up()
    {
        Schema::create('booking_settings', function (Blueprint $table): void {

            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->time('opening_hour_start')->nullable();
            $table->time('opening_hour_end')->nullable();
            $table->timestamps();

            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('booking_settings');
    }
};
