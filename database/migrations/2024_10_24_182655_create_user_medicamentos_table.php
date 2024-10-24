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
        Schema::create('user_medicamentos', function (Blueprint $table) {
            $table->id();
            $table->string('id_usuario');
            $table->string('id_medicamento');
            $table->string('tipo_dosagem');
            $table->string('qtd_dosagem');
            $table->string('horario');
            $table->string('data_inicial')->nullable();
            $table->string('data_final')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('user_medicamentos');
    }
};
