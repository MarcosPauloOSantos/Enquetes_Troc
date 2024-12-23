<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        /* Criação da tabela 'cache': Armazenar dados temporários em cache, 
        permitindo que a aplicação acesse informações rapidamente sem precisar 
        recalcular ou buscar no banco de dados principal.*/

        Schema::create('cache', function (Blueprint $table) {
            $table->string('key')->primary(); // Chave única que atua como identificador principal
            $table->mediumText('value'); // Valor associado à chave (pode armazenar texto grande)
            $table->integer('expiration'); // Tempo de expiração em formato de timestamp
        });

        /* Criação da tabela 'cache_locks': Gerenciar bloqueios temporários no cache, 
        impedindo que múltiplos processos ou threads acessem ou modifiquem simultaneamente
         um mesmo recurso, evitando condições de corrida (race conditions).*/

        Schema::create('cache_locks', function (Blueprint $table) {
            $table->string('key')->primary(); // Chave única usada para identificar o bloqueio
            $table->string('owner'); // Dono do bloqueio (identificador do processo ou thread)
            $table->integer('expiration'); // Tempo de expiração do bloqueio em formato de timestamp
        });
    }

    
    public function down(): void
    {
        // Remove a tabela 'cache', caso exista
        Schema::dropIfExists('cache');

        // Remove a tabela 'cache_locks', caso exista
        Schema::dropIfExists('cache_locks');
    }
};
