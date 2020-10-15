<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDiagnosticosxmedicamentosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('diagnosticosxmedicamentos', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->foreignId('diagnostico_id')->constrained('diagnosticos');
            $table->foreignId('medicamento_id')->constrained('medicamentos');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('diagnosticosxmedicamentos');
    }
}
