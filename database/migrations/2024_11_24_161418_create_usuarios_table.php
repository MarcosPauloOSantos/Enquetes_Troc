<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Executa a migração.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();  // Cria a coluna de ID auto-incremento
            $table->string('nome');  // Cria a coluna 'nome' do tipo string
            $table->string('email')->unique();  // Cria a coluna 'email' com valores únicos
            $table->string('senha');  // Cria a coluna 'senha'
            $table->timestamps();  // Cria as colunas de timestamp (created_at, updated_at)
        });
    }

    /**
     * Desfaz a migração.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');  // Remove a tabela 'usuarios' se ela existir
    }
}
