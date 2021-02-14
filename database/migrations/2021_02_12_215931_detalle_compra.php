<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetalleCompra extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_compra', function (Blueprint $table) {

            $table->unsignedBigInteger('id_notacompra');
            $table->unsignedBigInteger('cod_material');
            $table->integer('cantidad');
            $table->double('precio');
            $table->rememberToken();
            $table->timestamps();
            
            //relations with other tables

            $table->foreign('id_notacompra')->references('id')->on('nota_compra');
            $table->foreign('cod_material')->references('codigo')->on('material');
           
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
