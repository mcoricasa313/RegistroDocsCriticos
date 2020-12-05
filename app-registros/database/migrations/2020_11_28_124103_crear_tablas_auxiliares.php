<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CrearTablasAuxiliares extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('UnidadesOrganicas', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger("expedienteid");
            //$table->foreign("expedienteid")->references("id")->on("expediente_models");
            $table->string('descripcion');
            $table->integer('estado');
            $table->string('codigo');
            $table->timestamps();
        });

        Schema::create('Responsables', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("idunidad");
            $table->foreign("idunidad")->references("id")->on("UnidadesOrganicas");
            $table->string('nombrescompletos');
            $table->integer('estado');
            $table->string('cargo');
            $table->timestamps();
        });

        Schema::create('Roles', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger("iduser");
            $table->foreign("iduser")->references("id")->on("users");
            $table->string('descripcion');
            $table->integer('estado');
            $table->timestamps();
        });

        Schema::create('EntidadesPublicas', function (Blueprint $table) {
            $table->id();
            //$table->unsignedBigInteger("expedienteid");
            //$table->foreign("expedienteid")->references("id")->on("expediente_models");
            $table->string('descripcion');
            $table->integer('estado');
            $table->string('direccion');
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
