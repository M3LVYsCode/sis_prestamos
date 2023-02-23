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
        Schema::create('codigo', function (Blueprint $table) {
            $table->id('ID')->bigIncrements();
            $table->string('CODIGO',6);
            $table->dateTime('FECHA_GENERADO');
            $table->boolean('ESTADO')->default(1);
            
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('codigo');
    }
};
