<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateImovelsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('imovels', function (Blueprint $table) {
            $table->increments('id');
            $table->string('discriminator');
            $table->string('titulo');
            $table->string('areatt');
            $table->string('endereco');
            $table->string('valor')->nullable();
            $table->string('bairro');
            $table->string('cidade');
            $table->string('estado');
            $table->string('cep');
            $table->string('img',2000)->nullable();
            $table->string('obs',2000);
            $table->string('notas',2000)->nullable();
            $table->string('nome_prop')->nullable();
            $table->string('matricula')->nullable();
            $table->string('telefone_prop')->nullable();
            $table->string('celular_prop')->nullable();
            $table->string('valor_real')->nullable();
            $table->string('areapv')->nullable();
            $table->string('garagem')->nullable();
            $table->string('jardim')->nullable();
            $table->string('churras')->nullable();
            $table->string('quartos')->nullable();
            $table->string('banheiros')->nullable();
            $table->string('aguaq')->nullable();
            $table->string('sala')->nullable();
            $table->string('lavanderia')->nullable();
            $table->string('quiosque')->nullable();
            $table->string('mobilia')->nullable();
            $table->string('cozinha')->nullable();
            $table->string('sacada')->nullable();
            $table->string('fone')->nullable();
            $table->string('net')->nullable();
            $table->string('elevador')->nullable();
            $table->string('gas')->nullable();
            $table->string('festas')->nullable();
            $table->string('portaria')->nullable();
            $table->string('medidores')->nullable();
            $table->string('cerca')->nullable();
            $table->string('energia')->nullable();
            $table->string('categoria')->nullable();
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
        Schema::dropIfExists('imovels');
    }
}
