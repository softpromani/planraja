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
        Schema::create('tour_packages', function (Blueprint $table) {
            $table->id();
            $table->string('package_name','255')->nullable();
            $table->text('short_desc')->nullable();
            $table->text('description')->nullable();
            $table->string('duration')->nullable();
            $table->enum('trip_type', ['0', '1'])->default('0')->comment('0=>Road Trip, 1=>Beach Relaxation');
            $table->foreignId('start_city')->nullable()->constrained('cities');
            $table->foreignId('end_city')->nullable()->constrained('cities');
            $table->enum('status', ['0', '1'])->default('1')->comment('0=>Inactive, 1=>Active');
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
        Schema::dropIfExists('tour_packages');
    }
};
