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
        Schema::create('ps_managers', function (Blueprint $table) {
            $table->id('manager_id');
            $table->string('manager_name',100);
            $table->string('manager_email',100)->unique();
            $table->string('manager_pass',100);
            $table->string('manager_moblie',10);          
            $table->foreignId('branch_id')->references('branch_id')->on('ps_branches');          
            $table->foreignId('location_id')->references('location_id')->on('ps_locations');
            $table->enum('manager_status',array('enable','disable'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_managers');
    }
};
