<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AgregarExpedientesMovimientos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('ExpedientesMovimientos', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("expedienteid");
            $table->foreign("expedienteid")->references("id")->on("expediente_models");
            $table->integer('estado');
            $table->string('area');
            $table->string('responsable');
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
        //
    }
}
