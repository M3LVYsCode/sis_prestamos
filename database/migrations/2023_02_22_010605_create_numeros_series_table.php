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
        Schema::create('numeros_series', function (Blueprint $table) {
            $table->id('ID')->bigIncrements();
            $table->string('NUMERO_SERIE',100);
            $table->dateTime('FECHA_GENERADA');
            $table->dateTime('FECHA_BAJA');
            $table->boolean('ESTADO')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('numeros_series');
    }
};
