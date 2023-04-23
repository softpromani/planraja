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
        Schema::create('hotels', function (Blueprint $table) {
            $table->id();
            $table->string('hotel_name', '200');
            $table->text('short_description')->nullable();
            $table->text('description')->nullable();
            $table->string('hotel_email_id', '100')->nullable();
            $table->string('hotel_phone_no', '20')->nullable();
            $table->enum('property_type', ['0', '1'])->default('1')->comment('0=>Hotel, 1=>Resort');
            $table->enum('is_verify', ['0', '1'])->default('0')->comment('0=>Inactive, 1=>Active');
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
        Schema::dropIfExists('hotels');
    }
};
