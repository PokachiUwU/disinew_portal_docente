<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDocentesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('docentes', function (Blueprint $table) {
            $table->bigInteger('clave')->primary();
            $table->string('nombre_docente');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('foto', 1000);
            $table->string('correo_electronico')->unique();
            $table->string('fecha_nacimiento');
            $table->string('numero_celular');
            $table->string('tel_casa')->nullable();
            $table->string('personal_administrativo');
            $table->bigInteger('clave_carrera_asignacion');
            $table->string('nivel_estudios');
            $table->string('sexo');
            $table->string('lenguas_indigenas');
            $table->string('discapacidad');
            $table->string('discapacidad_visual');
            $table->string('antiguedad');
            $table->string('estudian');
            $table->string('lugar_estudios');
            $table->string('tiempo_dedicacion');
            $table->timestamps();

           $table->foreign('clave_carrera_asignacion')->references('clave')->on('carreras')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('docentes');
    }
}
