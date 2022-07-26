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
        Schema::create('seller_vouchers', function (Blueprint $table) {
            $table->id();
            $table->foreignId('s_id');
            $table->decimal('sv_req_amount',9,3);
            $table->decimal('sv_price',9,3);
            $table->string('sv_code');
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
        Schema::dropIfExists('seller_vouchers');
    }
};
