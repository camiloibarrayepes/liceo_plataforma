<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMatriculasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('matriculas', function (Blueprint $table) {
            $table->increments('id');
            $table->date('f_matricula');
            $table->bigInteger('valor_matricula');
            $table->boolean('estado_matricula');
            $table->boolean('estado_materiales');
            $table->boolean('estado_seguro');
            $table->boolean('estado_bono');
            $table->text('observaciones');
            $table->integer('est_id')->unsigned();
            $table->foreign('est_id')->references('id')->on('estudiantes');
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
        Schema::dropIfExists('matriculas');
    }
}
