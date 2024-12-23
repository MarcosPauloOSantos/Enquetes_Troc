<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     * Este método cria as tabelas relacionadas ao sistema de jobs do Laravel.
     */
    public function up(): void
    {
        // Tabela para armazenar jobs em fila
        Schema::create('jobs', function (Blueprint $table) {
            $table->id(); // Identificador único do job
            $table->string('queue')->index(); // Nome da fila em que o job está
            $table->longText('payload'); // Dados do job serializados (instruções e informações necessárias)
            $table->unsignedTinyInteger('attempts'); // Número de tentativas realizadas para processar o job
            $table->unsignedInteger('reserved_at')->nullable(); // Timestamp de quando o job foi reservado para execução
            $table->unsignedInteger('available_at'); // Timestamp indicando quando o job estará disponível para ser executado
            $table->unsignedInteger('created_at'); // Timestamp indicando quando o job foi criado
        });

        // Tabela para gerenciar lotes de jobs
        Schema::create('job_batches', function (Blueprint $table) {
            $table->string('id')->primary(); // Identificador único do lote de jobs
            $table->string('name'); // Nome do lote de jobs
            $table->integer('total_jobs'); // Número total de jobs no lote
            $table->integer('pending_jobs'); // Número de jobs pendentes no lote
            $table->integer('failed_jobs'); // Número de jobs que falharam no lote
            $table->longText('failed_job_ids'); // IDs dos jobs que falharam (armazenados como texto longo)
            $table->mediumText('options')->nullable(); // Opções adicionais configuradas para o lote
            $table->integer('cancelled_at')->nullable(); // Timestamp indicando quando o lote foi cancelado
            $table->integer('created_at'); // Timestamp indicando quando o lote foi criado
            $table->integer('finished_at')->nullable(); // Timestamp indicando quando o lote foi concluído
        });

        // Tabela para armazenar jobs que falharam
        Schema::create('failed_jobs', function (Blueprint $table) {
            $table->id(); // Identificador único do job que falhou
            $table->string('uuid')->unique(); // Identificador universal único (UUID) do job
            $table->text('connection'); // Nome da conexão que processou o job
            $table->text('queue'); // Nome da fila onde o job estava
            $table->longText('payload'); // Dados do job que falhou
            $table->longText('exception'); // Detalhes da exceção que causou a falha
            $table->timestamp('failed_at')->useCurrent(); // Timestamp indicando quando o job falhou
        });
    }

    /**
     * Reverse the migrations.
     * Este método remove as tabelas criadas pelo método `up`.
     */
    public function down(): void
    {
        Schema::dropIfExists('jobs'); // Remove a tabela 'jobs'
        Schema::dropIfExists('job_batches'); // Remove a tabela 'job_batches'
        Schema::dropIfExists('failed_jobs'); // Remove a tabela 'failed_jobs'
    }
};
