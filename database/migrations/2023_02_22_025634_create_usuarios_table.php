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
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id('ID')->bigIncrements();
            $table->string('NOMBRES',200);
            $table->string('AP_PATERNO',50);
            $table->string('AP_MATERNO',50);
            $table->string('CORREO',200);
            $table->string('CI',20);
            $table->string('CLAVE',200);
            $table->boolean('ESTADO')->default(1);
            $table->dateTime('FECHA_REGISTRO');
            $table->dateTime('FECHA_BAJA');
            $table->string('FOTO',1000);
            $table->string('USUARIO',100);
            $table->bigInteger('ID_ROL')->unsigned();
            $table->foreign('ID_ROL')->references('ID')->on('rols')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('usuarios');
    }
};
