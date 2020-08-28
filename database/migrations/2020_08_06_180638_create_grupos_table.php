<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGruposTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grupos', function (Blueprint $table) {
            $table->string('grupo')->primary();
            $table->string('clave_materia');
            $table->bigInteger('clave_docente');
            $table->string('salon');
            $table->integer('cuatrimestre');
            $table->string('horas_totales');
            $table->string('lunes')->nullable();
            $table->string('martes')->nullable();
            $table->string('miercoles')->nullable();
            $table->string('jueves')->nullable();
            $table->string('viernes')->nullable();
            $table->string('sabado')->nullable();
            $table->string('lunes1')->nullable();
            $table->string('lunes2')->nullable();
            $table->string('martes1')->nullable();
            $table->string('martes2')->nullable();
            $table->string('miercoles1')->nullable();
            $table->string('miercoles2')->nullable();
            $table->string('jueves1')->nullable();
            $table->string('jueves2')->nullable();
            $table->string('viernes1')->nullable();
            $table->string('viernes2')->nullable();
            $table->string('sabado1')->nullable();
            $table->string('sabado2')->nullable();
            $table->timestamps();

            $table->foreign('clave_materia')->references('clave')->on('materias')->onDelete('cascade');
            $table->foreign('clave_docente')->references('clave')->on('docentes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('grupos');
    }
}
