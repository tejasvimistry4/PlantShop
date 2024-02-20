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
        Schema::create('ps_users', function (Blueprint $table) {
            $table->id('user_id');
            $table->string('user_name',100);
            $table->string('user_email',100)->unique();
            $table->string('user_pass',100);
            $table->string('user_moblie',10);
            $table->string('user_address',200);         
            $table->foreignId('location_id')->references('location_id')->on('ps_locations');
            $table->enum('user_status',array('enable','disable'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_users');
    }
};
