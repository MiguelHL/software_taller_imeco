<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleNotasalida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_notasalida', function (Blueprint $table) {

            $table->unsignedBigInteger('id_stock');
            $table->unsignedBigInteger('id_notasalida');
            $table->integer('cantidad');
            $table->rememberToken();
            $table->timestamps();
            
            //relations with other tables
            $table->foreign('id_stock')->references('id')->on('stock');
            $table->foreign('id_notasalida')->references('id')->on('nota_salida');
           
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
