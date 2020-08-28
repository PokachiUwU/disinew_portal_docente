<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateAlumnosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumnos', function (Blueprint $table) {
            $table->bigInteger('expediente')->primary();
            $table->string('nombre_alumno');
            $table->string('apellido_paterno');
            $table->string('apellido_materno')->nullable();
            $table->string('curp')->unique();
            $table->string('sexo');
            $table->string('fecha_nacimiento');
            $table->integer('edad')->nullable();
            $table->string('estado_nacimiento');
            $table->string('nacionalidad');
            $table->string('tipo_sangre')->nullable();
            $table->string('nss')->nullable();
            $table->string('estado_civil');
            $table->string('discapacidad');
            $table->string('discapacidad_visual');
            $table->string('correo_electronico')->unique();
            $table->string('domicilio');
            $table->string('colonia')->nullable();
            $table->string('ciudad')->nullable();
            $table->string('estado');
            $table->string('facebook')->nullable();
            $table->string('twitter')->nullable();
            $table->string('tel_casa')->nullable();
            $table->string('tel_celular')->nullable();
            $table->string('escuela_procedencia');
            $table->string('estado_bachillerato');
            $table->string('ciudad_bachillerato');
            $table->bigInteger('clave_carrera_interes');
            $table->string('lengua_indigena');
            $table->string('comunidad_indigena');
            $table->string('grupo_indigena');
            $table->string('foto', 1000)->nullable();
            $table->string('modalidad');
            $table->string('periodo_escolar');
            $table->string('unidad_academica');
            $table->bigInteger('clave_carrera');
            $table->string('grupo');
            $table->string('cuatrimestre');
            $table->string('reingreso_carrera');
            $table->string('ano_ingreso')->nullable();
            $table->string('becado');
            $table->string('origen_beca')->nullable();
            $table->string('ciclo_escolar');
            $table->string('estado_estudiante');
            $table->timestamps();

           $table->foreign('clave_carrera_interes')->references('clave')->on('carreras')->onDelete('cascade');
           $table->foreign('clave_carrera')->references('clave')->on('carreras')->onDelete('cascade');
    
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('alumnos');
    }
}
