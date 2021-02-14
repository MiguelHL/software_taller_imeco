<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Material extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('material', function (Blueprint $table) {

            $table->bigIncrements('codigo')->unique();
            $table->string('nombre');
            $table->double('precio');
            $table->string('descripcion');
            $table->unsignedBigInteger('id_unidad');
            $table->unsignedBigInteger('id_categoria');
            $table->rememberToken();
            $table->timestamps();
            
            //relations with other tables
            $table->foreign('id_unidad')->references('id')->on('unidad_medida');
            $table->foreign('id_categoria')->references('id')->on('categoria');
           
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
