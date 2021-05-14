<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateEstadoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('estado', function (Blueprint $table) {
            $table->increments('idEstado');
            $table->integer('d_codigo'); 
            $table->string('d_tipo_asenta', 100);
            $table->integer('CP');
            $table->unsignedInteger('id_Colonia'); 
            $table->unsignedInteger('id_Municipio');
            $table->foreign('id_Colonia')->references('IdColonia')->on('colonia');
            $table->foreign('id_Municipio')->references('idMunicipio')->on('municipio');
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
        Schema::dropIfExists('estado');
    }
}
