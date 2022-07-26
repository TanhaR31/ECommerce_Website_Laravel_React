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
        Schema::create('sellers', function (Blueprint $table) {
            $table->id();
			$table->string('s_name');
			$table->string('s_phone')->unique();
			$table->timestamp('phone_verified_at')->nullable();
			$table->string('rememberPhoneToken')->nullable();
			$table->string('s_email')->unique()->nullable();
			$table->timestamp('email_verified_at')->nullable();
			$table->string('rememberEmailToken')->nullable();
			$table->string('s_password');
            $table->string('s_password_confirm');
            $table->string('s_address');
			$table->string('image')->nullable();
			$table->rememberToken()->nullable();
            $table->string('s_approve');
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
        Schema::dropIfExists('sellers');
    }
};
