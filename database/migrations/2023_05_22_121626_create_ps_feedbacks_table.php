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
        Schema::create('ps_feedbacks', function (Blueprint $table) {
            $table->id('feedback_id');
          
            $table->foreignId('user_id')->references('user_id')->on('ps_users');
      
            $table->foreignId('order_id')->references('order_id')->on('ps_orders');
            $table->integer('rating');
            $table->string('comment',100);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_feedbacks');
    }
};
