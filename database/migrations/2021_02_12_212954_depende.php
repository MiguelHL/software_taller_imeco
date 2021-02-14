<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Depende extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('depende', function (Blueprint $table) {

            $table->unsignedBigInteger('cod_materialpadre');
            $table->unsignedBigInteger('cod_materialhijo');
            $table->rememberToken();
            $table->timestamps();
            
            //relations with other tables
            $table->foreign('cod_materialpadre')->references('codigo')->on('material');
            $table->foreign('cod_materialhijo')->references('codigo')->on('material');
           
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
