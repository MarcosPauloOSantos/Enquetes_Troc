<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsuariosTable extends Migration
{
    /**
     * Executa a migração.
     * Este método cria a tabela 'usuarios', usada para armazenar informações dos usuários.
     */
    public function up()
    {
        Schema::create('usuarios', function (Blueprint $table) {
            $table->id();  // Cria a coluna 'id' como chave primária auto-incremento
            $table->string('nome');  // Cria a coluna 'nome' do tipo string, para armazenar o nome do usuário
            $table->string('email')->unique();  // Cria a coluna 'email' com valores únicos, garantindo que não haja emails duplicados
            $table->string('password');  // Cria a coluna 'senha' para armazenar a senha do usuário
            $table->timestamps();  // Cria as colunas 'created_at' e 'updated_at' para rastrear quando o registro foi criado ou atualizado
        });
    }

    /**
     * Desfaz a migração.
     * Este método remove a tabela 'usuarios' criada no método 'up'.
     */
    public function down()
    {
        Schema::dropIfExists('usuarios');  // Remove a tabela 'usuarios' caso ela exista
    }
}
