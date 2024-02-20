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
        Schema::create('ps_carts', function (Blueprint $table) {
            $table->id('cart_id');
            $table->foreignId('product_id')->references('product_id')->on('ps_products');
            $table->integer('quantity');
            $table->decimal('product_price',10,2);
            $table->decimal('total_amt',10,2);
            $table->string('unique_cart_id',100);
           
            $table->foreignId('user_id')->references('user_id')->on('ps_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_carts');
    }
};
