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
        Schema::create('seller_customers', function (Blueprint $table) {
            $table->id();
            $table->string('c_name');
            $table->string('c_phone')->unique();
            $table->string('c_email')->unique()->nullable();
            $table->string('c_address');
            $table->string('c_image')->nullable();
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
        Schema::dropIfExists('seller_customers');
    }
};
