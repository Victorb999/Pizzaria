<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTablePedidos extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('pedidos', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedInteger('id_pizza');
            $table->foreign('id_pizza')->references('id')->on('pizzas');
            $table->string('telefone_cliente',100);
            $table->string('nome_cliente',100);
            $table->string('endereco',100);
            $table->enum('status',['produzindo','entregando','entregue','cancelado'])->default('produzindo');
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
        Schema::dropIfExists('pedidos');
    }
}
