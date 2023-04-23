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
        Schema::create('hotel_contacts', function (Blueprint $table) {
            $table->id();
            $table->foreignId('hotel_id')->constrained('hotels');
            $table->string('contact_person')->nullable();
            $table->enum('designation',['o', 'm'])->default('m')->comment('o=>owner, m=>manager');
            $table->string('mobile_no', '20')->nullable();
            $table->string('email_id', '100')->nullable();
            $table->string('account_no', '50')->nullable();
            $table->string('account_holder_name', '150')->nullable();
            $table->string('ifsc_code', '20')->nullable();
            $table->string('pan_card_photo', '100')->nullable();
            $table->string('cancel_cheque_photo', '100')->nullable();
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
        Schema::dropIfExists('hotel_contacts');
    }
};
