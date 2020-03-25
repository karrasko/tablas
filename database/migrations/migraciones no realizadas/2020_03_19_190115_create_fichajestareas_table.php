<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateFichajestareasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fichajestareas', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
            $table->integer('id_fichatarea')->nullable();
            $table->string('id_proyecto')->nullable();
            $table->string('id_tarea')->nullable();
            $table->string('id_asistencia')->nullable();
            $table->string('fech_ini')->nullable();
            $table->string('fech_fin')->nullable();
            });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('fichajestareas');
    }
}
