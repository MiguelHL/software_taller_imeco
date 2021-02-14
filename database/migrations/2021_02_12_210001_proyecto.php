<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Proyecto extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('proyecto', function (Blueprint $table) {

            $table->bigIncrements('id')->unique();
            $table->string('nombre');
            $table->string('nombre_corto');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->unsignedBigInteger('id_etapa');
            $table->unsignedBigInteger('id_user');
            //relations with other tables
            $table->foreign('id_etapa')->references('id')->on('etapa');
            $table->foreign('id_user')->references('id')->on('users');
            $table->rememberToken();
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
