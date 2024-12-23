<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Este método cria a tabela 'sessions', usada para armazenar informações sobre as sessões de usuários.
     */
    public function up(): void
    {
        Schema::create('sessions', function (Blueprint $table) {
            $table->string('id')->primary();  // Cria a coluna 'id' como chave primária, que será usada para identificar a sessão
            $table->foreignId('user_id')->nullable()->index();  // Cria a coluna 'user_id' como chave estrangeira, associando a sessão a um usuário, e cria um índice para pesquisa rápida
            $table->string('ip_address', 45)->nullable();  // Cria a coluna 'ip_address' para armazenar o endereço IP do usuário (max. 45 caracteres para suportar IPv6)
            $table->text('user_agent')->nullable();  // Cria a coluna 'user_agent' para armazenar o agente do usuário (informações sobre o navegador, sistema operacional, etc.)
            $table->longText('payload');  // Cria a coluna 'payload' para armazenar os dados serializados da sessão
            $table->integer('last_activity')->index();  // Cria a coluna 'last_activity' para armazenar o timestamp da última atividade na sessão, com um índice para busca rápida
        });
    }

    /**
     * Reverse the migrations.
     * Este método remove a tabela 'sessions' criada no método 'up'.
     */
    public function down(): void
    {
        Schema::dropIfExists('sessions');  // Remove a tabela 'sessions' caso ela exista
    }
};

