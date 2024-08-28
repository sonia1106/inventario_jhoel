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
        Schema::create('compras', function (Blueprint $table) {
            $table->integer('id', true);
            $table->dateTime('fecha_compra');
            $table->string('insumos_comprados', 100);
            $table->integer('catidad');
            $table->double('precio_total', null, 0);
            $table->string('estado_orden', 100);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('compras');
    }
};
