<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ps_product_boxes', function (Blueprint $table) {
            $table->id('product_box_id');
            $table->string('product_box_pot',100);
            $table->string('product_box_size',100);
            $table->string('product_box_soil',100);
            $table->string('product_box_img');
           
            $table->foreignId('product_id')->references('product_id')->on('ps_products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_product_boxes');
    }
};
