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
        Schema::create('rols', function (Blueprint $table) {
            $table->engine="InnoDB";
            $table->id('ID')->bigIncrements();
            $table->string('NOMBRE',255);
            $table->string('DESCRIPCION',255);
            $table->boolean('ESTADO')->default(1);
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('rols');
    }
};
