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
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id('ID')->bigIncrements();
            $table->bigInteger('ID_CODIGO')->unsigned();
            $table->foreign('ID_CODIGO')->references('ID')->on('codigo')->onUpdate('cascade')->onDelete('cascade');
            $table->boolean('ESTADO')->default(1);
            $table->bigInteger('ID_MATERIA')->unsigned();
            $table->foreign('ID_MATERIA')->references('ID')->on('materias')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('ID_LABORATORIO')->unsigned();
            $table->foreign('ID_LABORATORIO')->references('ID')->on('laboratorios')->onUpdate('cascade')->onDelete('cascade');
            $table->dateTime('FECHA_HORAENTREGA');
            $table->dateTime('FECHA_HORAPEDIDO');
            $table->dateTime('FECHA_HORADEVUELTO');
            $table->dateTime('FECHA_HORACAMBIO');
            $table->bigInteger('ID_DOCENTE')->unsigned();
            $table->foreign('ID_DOCENTE')->references('ID')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('ID_GABINETE')->unsigned();
            $table->foreign('ID_GABINETE')->references('ID')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
            $table->string('CORREO_ESTUDIANTES',250);

        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('prestamos');
    }
};
