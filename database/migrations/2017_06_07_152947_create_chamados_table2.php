<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;

class CreateChamadosTable2 extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chamados', function(Blueprint $table) {
            $table->increments('id');
            $table->string('titulo');
            $table->text('descricao');
            $table->integer('categoria_id')->unsigned();
            $table->datetime('data_abertura');
            $table->datetime('data_vencimento')->nullable();
            $table->datetime('data_fechamento')->nullable();
            $table->integer('requerente_id')->unsigned();
            $table->integer('responsavel_id')->unsigned();
            $table->integer('status_id')->unsigned();
            $table->integer('localizacao_id')->unsigned();
            $table->timestamps();
            $table->foreign('categoria_id')->references('id')->on('categorias')->onDelete('cascade');
            $table->foreign('requerente_id')->references('id')->on('requerentes')->onDelete('cascade');
            $table->foreign('responsavel_id')->references('id')->on('users')->onDelete('cascade');
            $table->foreign('status_id')->references('id')->on('status')->onDelete('cascade');
            $table->foreign('localizacao_id')->references('id')->on('localizacoes')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('chamados');
    }
}
