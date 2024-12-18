<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateOpcoesTable extends Migration
{
    public function up()
    {
        Schema::create('opcoes', function (Blueprint $table) {
            $table->id();
            $table->foreignId('enquete_id')->constrained()->onDelete('cascade');
            $table->string('descricao');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('opcoes');
    }
}

