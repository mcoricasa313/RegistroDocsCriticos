<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExpedientemodelTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ExpedienteModel', function (Blueprint $table) {
            $table->id();
            $table->string('numero_expediente');
            $table->string('asunto');
            $table->string('numero_documento');
            $table->integer('folios');
            $table->string('remitente');
            $table->string('prioridad');
            $table->string('uo_destino');
            $table->integer('estado');
            $table->string('observacion');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('ExpedienteModel');
    }
}
