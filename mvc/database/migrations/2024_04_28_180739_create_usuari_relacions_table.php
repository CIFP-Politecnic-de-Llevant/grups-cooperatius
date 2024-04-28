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
        Schema::create('usuari_relacions', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('usuari_id');
            $table->unsignedBigInteger('ami_ene_id');
            $table->enum('relacion_tipo', ['amic', 'enemic']);

            $table->foreign('usuari_id')->references('id')->on('usuari')->onDelete('cascade');
            $table->foreign('ami_ene_id')->references('id')->on('usuari')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuari_relacions');
    }
};
