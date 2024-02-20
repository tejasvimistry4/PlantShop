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
        Schema::create('ps_orders', function (Blueprint $table) {
            $table->id('order_id');
         
            $table->foreignId('product_id')->references('product_id')->on('ps_products');
    
            $table->foreignId('user_id')->references('user_id')->on('ps_users');
            $table->date('order_date');
            $table->integer('quantity');
            $table->decimal('total_amt',10,2);
            $table->enum('payment_status',array('Paid','Pending','Failed'));
            $table->enum('order_status',array('Processing','Shipped','Delivered'));
            $table->string('shipping_address',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_orders');
    }
};
