<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hotel_rooms', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained();
            $table->integer('total_rooms')->nullable();
            $table->integer('available_rooms')->nullable();
            $table->enum('room_type', ['s', 'd', 'f', 'h'])->default('d')->comment('s=>single, d=>double, f=>four, h=>half');
            $table->integer('price_per_night')->nullable();
            $table->double('gst', 10,2)->nullable(0.00);
            $table->enum('status', ['0', '1'])->default('0')->comment('0=>Inactive, 1=>Active');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hotel_rooms');
    }
};
