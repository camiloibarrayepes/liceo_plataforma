<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstudiantesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estudiantes', function (Blueprint $table) {
            $table->increments('id');
            $table->char('nombre', 100);
            $table->char('apellido', 100);
            $table->integer('documento');
            $table->date('f_nacimiento');
            $table->integer('telefono');
            $table->char('direccion', 100);
            $table->integer('id_acudiente1');
            $table->integer('id_acudiente2');
            $table->char('eps',100);
            $table->integer('grado');
            $table->text('grado_colegio_anterior');
            $table->text('observaciones');
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
        Schema::dropIfExists('estudiantes');
    }
}
