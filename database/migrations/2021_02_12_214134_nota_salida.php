<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotaSalida extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_salida', function (Blueprint $table) {

            $table->bigIncrements('id')->unique();
            $table->string('nombre');
            $table->date('fecha');
            $table->unsignedBigInteger('id_user');
            $table->rememberToken();
            $table->timestamps();
            
            //relations with other tables
            $table->foreign('id_user')->references('id')->on('users');
           
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
