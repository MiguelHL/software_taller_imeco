<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Stock extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('stock', function (Blueprint $table) {

            $table->bigIncrements('id')->unique();
            $table->date('fecha_entrada');
            $table->date('fecha_vencimiento');
            $table->integer('cantidad');
            $table->double('precio');
            $table->unsignedBigInteger('cod_material');
            $table->unsignedBigInteger('id_almacen');
            $table->rememberToken();
            $table->timestamps();
            
            //relations with other tables
            $table->foreign('cod_material')->references('codigo')->on('material');
            $table->foreign('id_almacen')->references('id')->on('almacen');
           
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
