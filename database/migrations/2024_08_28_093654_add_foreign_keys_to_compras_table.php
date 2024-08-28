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
        Schema::table('compras', function (Blueprint $table) {
            $table->foreign(['id'], 'compras_personas_FK')->references(['id'])->on('personas')->onUpdate('no action')->onDelete('no action');
            $table->foreign(['id'], 'compras_proveedores_FK')->references(['id'])->on('proveedores')->onUpdate('no action')->onDelete('no action');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('compras', function (Blueprint $table) {
            $table->dropForeign('compras_personas_FK');
            $table->dropForeign('compras_proveedores_FK');
        });
    }
};
