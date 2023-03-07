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
        Schema::create('pedidos', function (Blueprint $table) {
            $table->id();
            $table->string('metodo_pago');
            $table->foreignId('id_punto_entrega')->references('id')->on('puntoentregas');
            $table->foreignId('id_material')->references('id')->on('materials');
            $table->foreignId('id_usuario')->references('id')->on('users');
            $table->string('Total');
            $table->string('estado');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pedidos');
    }
};
