<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAlumnoNotaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('alumno_nota', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('alumno_id')->unsigned();
            $table->integer('grado_id')->unsigned();
            $table->integer('materia_id')->unsigned();
            $table->float('trimestre1',8,2);
            $table->float('trimestre2',8,2);
            $table->float('trimestre3',8,2);

            $table->foreign('grado_id')->references('id')->on('grados');
            $table->foreign('alumno_id')->references('id')->on('alumnos');
            $table->foreign('materia_id')->references('id')->on('materias');

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
        Schema::dropIfExists('alumno_nota');
    }
}
