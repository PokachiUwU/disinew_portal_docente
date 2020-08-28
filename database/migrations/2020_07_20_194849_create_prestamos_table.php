<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrestamosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('prestamos', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('clave_docente');
            $table->string('clave_material');
            $table->string('grupo')->nullable();
            $table->string('hora_pedido')->nullable();
            $table->string('hora_entrega')->nullable();
            $table->string('fecha_pedido')->nullable();
            $table->string('fecha_entrega')->nullable();
            $table->string('entregado');
            $table->timestamps();

            $table->foreign('clave_docente')->references('clave')->on('docentes')->onDelete('cascade');
            $table->foreign('clave_material')->references('clave')->on('materiales')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('prestamos');
    }
}
