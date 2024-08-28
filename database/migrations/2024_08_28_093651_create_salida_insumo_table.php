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
        Schema::create('salida_insumo', function (Blueprint $table) {
            $table->integer('id', true);
            $table->double('cantidad_salida', null, 0);
            $table->dateTime('fecha_salida');
            $table->string('cliente', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('salida_insumo');
    }
};
