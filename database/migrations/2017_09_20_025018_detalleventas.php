<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Detalleventas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalleventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('ventas_id');
            $table->integer('productos_id');
            $table->integer('clientes_id');
            $table->double('cantidad');
            $table->double('importe');
           
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
        Schema::drop('detalleventas');
    }
}
