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
        Schema::create('ps_admins', function (Blueprint $table) {
            $table->id('admin_id');
            $table->string('admin_name',100);
            $table->string('admin_email',100)->unique();
            $table->string('admin_pass',100);
            $table->string('admin_moblie',10);
            $table->enum('admin_status',array('enable','disable'));
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ps_admins');
    }
};
