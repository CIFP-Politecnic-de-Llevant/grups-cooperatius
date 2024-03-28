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
        Schema::create('usuari', function (Blueprint $table) {
            $table->id();
            $table->string('nom',255);
            $table->string('cognom1',255);
            $table->string('cognom2',255)->nullable(true);
            $table->enum('sex',array('masculi','femeni'));
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuari');
    }
};
