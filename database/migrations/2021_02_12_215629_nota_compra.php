<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class NotaCompra extends Migration

{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nota_compra', function (Blueprint $table) {

            $table->bigIncrements('id')->unique();
            $table->date('fecha');
            $table->double('montototal');
            $table->unsignedBigInteger('id_user');
            $table->unsignedBigInteger('id_proveedor');
            $table->rememberToken();
            $table->timestamps();
            
            //relations with other tables
            $table->foreign('id_user')->references('id')->on('users');
            $table->foreign('id_proveedor')->references('id')->on('proveedor');
           
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
