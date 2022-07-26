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
        Schema::create('seller_products', function (Blueprint $table) {
            $table->id();
            $table->foreignId('s_id');
            $table->string('p_name');
            $table->foreignId('ct_id');
            $table->string('p_category');
            $table->text('p_description');
            $table->string('p_image');
            $table->integer('p_qty');
            $table->integer('p_sold');
            $table->decimal('fix_cost',9,3);
            $table->decimal('var_cost',9,3);
            $table->foreignId('st_id');
            $table->decimal('adm_cost',9,3);
            $table->decimal('extra_price',9,3);
            $table->decimal('discount',9,3);
            $table->decimal('total_price',9,3);
            $table->integer('p_approve');
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
        Schema::dropIfExists('seller_products');
    }
};
