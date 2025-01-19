<?php

namespace App\Listeners;

use App\Events\UserLoggedIn;

class LogUserLogin
{
    public function handle(UserLoggedIn $event)
    {
        // Aqui, você pode acessar o usuário via $event->user
        $user = $event->user;

        // Lógica para registrar o login do usuário
        // Exemplo de log:
        \Log::info("Usuário logado: " . $user->name);
    }
}
