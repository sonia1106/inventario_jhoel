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
        Schema::table('salida_insumo', function (Blueprint $table) {
            $table->foreign(['id'], 'salida_insumo_insumos_FK')->references(['id'])->on('insumos')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id'], 'salida_insumo_personas_FK')->references(['id'])->on('personas')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('salida_insumo', function (Blueprint $table) {
            $table->dropForeign('salida_insumo_insumos_FK');
            $table->dropForeign('salida_insumo_personas_FK');
        });
    }
};
