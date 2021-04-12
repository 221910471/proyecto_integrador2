<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTbEnviosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('tb_envios', function (Blueprint $table) {
            $table->bigIncrements('id_envio');
            $table->date('fecha_envio');
            $table->date('fecha_entrega');
            $table->string('estatus');
            $table->string('codigo');
            $table->string('zona');
            $table->integer('venta_id');
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
        Schema::dropIfExists('tb_envios');
    }
}
