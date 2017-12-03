<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAcudientesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('acudientes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombre', 100);
            $table->char('apellido', 100);
            $table->integer('documento');
            $table->integer('telefono');
            $table->char('direccion', 100);
            $table->integer('est_id')->unsigned();
            $table->foreign('est_id')->references('id')->on('estudiantes');
            $table->char('parentezco',100);
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
        Schema::dropIfExists('acudientes');
    }
}
