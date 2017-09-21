<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVentas extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
               Schema::create('ventas', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('cliente_id');
            $table->integer('productos_id');
            $table->integer('plazo');
            $table->double('abono');
            $table->double('total');
           
           
            
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
        //
    }
}
