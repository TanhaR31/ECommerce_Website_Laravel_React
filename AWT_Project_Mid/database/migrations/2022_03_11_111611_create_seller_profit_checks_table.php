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
        Schema::create('seller_profit_checks', function (Blueprint $table) {
            $table->id();
            $table->foreignId('s_id');
            $table->foreignId('p_id');
            $table->integer('p_qty');
            $table->integer('p_sold');
            $table->decimal('revenue',9,3);
            $table->decimal('cogs',9,3);
            $table->decimal('gross_profit',9,3);
            $table->decimal('net_income',9,3);
            $table->decimal('gross_margin',9,3);
            $table->decimal('net_margin',9,3);
            $table->decimal('selling_rate',9,3);
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
        Schema::dropIfExists('seller_profit_checks');
    }
};
