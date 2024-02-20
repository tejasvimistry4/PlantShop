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
        Schema::create('ps_products', function (Blueprint $table) {
            $table->id('product_id');
            $table->string('product_name');
            $table->decimal('product_price',10,2);
            $table->decimal('product_sale_price',10,2);
            $table->string('product_size');
            $table->string('product_tumb_img');
            $table->string('product_description');
            $table->string('product_quantity');
           
            $table->foreignId('branch_id')->references('branch_id')->on('ps_branches');
           
            $table->foreignId('category_id')->references('category_id')->on('ps_categories');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_products');
    }
};
