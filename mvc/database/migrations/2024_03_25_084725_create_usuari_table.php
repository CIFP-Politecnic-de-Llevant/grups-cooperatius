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
            $table->string('cognoms',255);
            $table->unsignedBigInteger('curs_id');
            $table->foreign('curs_id')->references('id')->on('curs')->onDelete('cascade');
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
