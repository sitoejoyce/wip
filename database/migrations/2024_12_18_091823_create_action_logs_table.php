<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        Schema::create('action_logs', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id'); // Relacionamento com usuários
            $table->string('action'); // Ação realizada
            $table->text('details'); // Detalhes adicionais
            $table->ipAddress('ip'); // Endereço IP do usuário
            $table->timestamps();

            // Chave estrangeira
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('action_logs');
    }
};
