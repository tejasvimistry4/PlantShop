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
        Schema::create('ps_product_faqs', function (Blueprint $table) {
            $table->id('prod_faq_id');
            $table->string('prod_faq_que',100);
            $table->string('prod_faq_ans',200);
          
            $table->foreignId('product_id')->references('product_id')->on('ps_products');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_product_faqs');
    }
};
