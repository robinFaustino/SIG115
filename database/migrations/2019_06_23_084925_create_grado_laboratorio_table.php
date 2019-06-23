<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGradoLaboratorioTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('grado_laboratorio', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('grado_id')->unsigned();
            $table->integer('laboratorio_id')->unsigned();
            $table->integer('utiliza');
            $table->date('fecha');

            $table->foreign('grado_id')->references('id')->on('grados');
            $table->foreign('laboratorio_id')->references('id')->on('laboratorios');

            $table->index(['grado_id', 'laboratorio_id']);

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
        Schema::dropIfExists('grado_laboratorio');
    }
}
