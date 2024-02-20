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
        Schema::create('ps_branches', function (Blueprint $table) {
            $table->id('branch_id');
            $table->string('branches_name');       
            $table->foreignId('admin_id')->references('admin_id')->on('ps_admins');          
            $table->foreignId('location_id')->references('location_id')->on('ps_locations');
            $table->enum('branch_status',array('enable','disable'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_branches');
    }
};
