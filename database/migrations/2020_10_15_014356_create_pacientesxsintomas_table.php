<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePacientesxsintomasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pacientesxsintomas', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('paciente_id')->constrained('pacientes');
            $table->foreignId('sintoma_id')->constrained('sintomas');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pacientesxsintomas');
    }
}
