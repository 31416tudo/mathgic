<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Pregunta extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pregunta', function (Blueprint $table) {
            $table->increments('ID_pregunta');
            $table->string('textoPregunta', 500);
            $table->string('imagen')->nullable();
            $table->string('respuestaA', 100);
            $table->string('respuestaB', 100);
            $table->string('respuestaC', 100);
            $table->string('respuestaD', 100);
            $table->string('respuestaCorrecta', 100);
            $table->string('curso', 100);
            $table->foreign('curso')->references('nombreCurso')->on('curso')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('curso');
    }
}
