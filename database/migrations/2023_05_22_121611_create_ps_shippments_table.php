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
        Schema::create('ps_shippments', function (Blueprint $table) {
            $table->id('shipping_id');
            $table->foreignId('order_id')->references('order_id')->on('ps_orders');
            $table->date('shipping_date');
            $table->enum('shipping_status',array('Shipped','Transit','Delivered'));
          
            $table->foreignId('location_id')->references('location_id')->on('ps_locations');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_shippments');
    }
};
