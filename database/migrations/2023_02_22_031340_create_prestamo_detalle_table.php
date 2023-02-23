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
        Schema::create('prestamo_detalle', function (Blueprint $table) {
            $table->id('ID')->bigIncrements();
            $table->bigInteger('ID_PRESTAMO')->unsigned();
            $table->foreign('ID_PRESTAMO')->references('ID')->on('prestamos')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('ID_INVENTARIO')->unsigned();
            $table->foreign('ID_INVENTARIO')->references('ID')->on('inventarios')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('ESTADO')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamo_detalle');
    }
};
