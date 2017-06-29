<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Cardex extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('cardex', function (Blueprint $table) {
            $table->increments('Id_cardex');
            $table->string('curso', 100);
            $table->foreign('curso')->references('nombreCurso')->on('curso')->OnDelete('cascade');
            $table->integer('id')->unsigned();
            $table->decimal('calificacion', 8,4);
            $table->foreign('id')->references('id')->on('users')->OnDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('pregunta');
    }
}
