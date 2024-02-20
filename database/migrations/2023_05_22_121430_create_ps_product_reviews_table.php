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
        Schema::create('ps_product_reviews', function (Blueprint $table) {
            $table->id('prod_review_id');
            $table->integer('prod_review_star');
            $table->date('prod_review_date');
            $table->string('prod_review_msg',2000);
          
            $table->foreignId('product_id')->references('product_id')->on('ps_products');
           
            $table->foreignId('user_id')->references('user_id')->on('ps_users');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_product_reviews');
    }
};
