<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCarrerasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('carreras', function (Blueprint $table) {
            $table->bigInteger('clave')->primary();
            $table->string('nombre_carrera')->unique();
            $table->string('clave_escuela');
            $table->string('clave_unidad')->nullable();
            $table->string('nombre_unidad')->nullable();
            $table->string('area');
            $table->string('modalidad');
            $table->string('plan_estudios');
            $table->string('competencias_especificas', 2000);
            $table->string('competencias_genericas', 2000);
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
        Schema::dropIfExists('carreras');
    }
}
