<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class DetallePlanilla extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('detalle_planilla', function (Blueprint $table) {

            $table->unsignedBigInteger('id_planilla');
            $table->unsignedBigInteger('cod_material');
            $table->integer('cantidad');
            $table->rememberToken();
            $table->timestamps();
            
            //relations with other tables
            $table->foreign('id_planilla')->references('codigo')->on('planilla');
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
