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
        Schema::create('ps_couriers', function (Blueprint $table) {
            $table->id('courierboy_id');
            $table->string('courierboy_name',100);
            $table->string('courierboy_email')->unique();
            $table->string('courierboy_pass',100);
            $table->string('courierboy_moblie',10);
         
            $table->foreignId('manager_id')->references('manager_id')->on('ps_managers');
           
            $table->foreignId('branch_id')->references('branch_id')->on('ps_branches');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_couriers');
    }
};
