<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjetosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('executoras', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            //$table->timestamps();
        });

        Schema::create('projetos', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nome');
            $table->string('cliente');

            //Executora
            $table->integer('executora_id')->unsigned();
            $table->foreign('executora_id')->references('id')->on('executoras');

            //Departamento
            $table->integer('departamento_id')->unsigned();
            $table->foreign('departamento_id')->references('id')->on('departamentos');

            $table->date('data_inicio');

            //$table->timestamps()->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projetos');
        Schema::dropIfExists('executoras');
    }
}
