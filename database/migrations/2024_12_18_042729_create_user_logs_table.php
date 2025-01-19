<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUserLogsTable extends Migration
{
    public function up()
    {
        Schema::create('user_logs', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');  // Relacionamento com o usuário
            $table->text('action');  // Descrição da ação
            $table->timestamps();
        });
        
    }

    public function down()
    {
        Schema::dropIfExists('user_logs');
    }
}