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
        Schema::create('inventarios', function (Blueprint $table) {
            $table->id('ID')->bigIncrements();
            $table->string('NOMBRE',150);
            $table->string('MARCA',150);
            $table->string('MODELO',150);
            $table->string('DESCRIPCION',1000);
            $table->string('SERIAL',100);
            $table->dateTime('FECHA_INGRESO');
            $table->dateTime('FECHA_BAJA');
            $table->boolean('ESTADO')->default(1);
            $table->string('CONDICION');
            $table->string('FOTO',3000);
            $table->bigInteger('ID_CATEGORIA')->unsigned();
            $table->foreign('ID_CATEGORIA')->references('ID')->on('categorias')->onUpdate('cascade')->onDelete('cascade');
            $table->integer('CANTIDAD');
            $table->bigInteger('ID_USUARIO_REGISTRO')->unsigned();
            $table->foreign('ID_USUARIO_REGISTRO')->references('ID')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
            $table->bigInteger('ID_USUARIO_BAJA')->unsigned();
            $table->foreign('ID_USUARIO_BAJA')->references('ID')->on('usuarios')->onUpdate('cascade')->onDelete('cascade');
             
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('inventarios');
    }
};
