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
        Schema::create('puntoentregas', function (Blueprint $table) {
            $table->id();
            $table->string('tienda');
            $table->string('provincia');
            $table->integer('cp');
            $table->string('direccion');
            $table->string('encargado');
            $table->string('foto');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('puntoentregas');
    }
};
