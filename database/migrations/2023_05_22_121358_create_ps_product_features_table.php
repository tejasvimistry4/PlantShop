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
        Schema::create('ps_product_features', function (Blueprint $table) {
            $table->id('prod_feature_id');
           
            $table->foreignId('product_id')->references('product_id')->on('ps_products');
            $table->string('prod_feature_title',100);
            $table->string('prod_feature_description',100);

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_product_features');
    }
};
