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
        Schema::create('ps_locations', function (Blueprint $table) {
            $table->id('location_id');
            $table->string('location_name');
            $table->foreignId('admin_id')->references('admin_id')->on('ps_admins');
            $table->enum('location_status',array('enable','disable'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_locations');
    }
};
