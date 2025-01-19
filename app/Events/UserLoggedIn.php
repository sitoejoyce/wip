<?php

namespace App\Events;

use App\Models\User;
use Illuminate\Foundation\Events\Dispatchable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Broadcasting\InteractsWithSockets;

class UserLoggedIn
{
    use Dispatchable, InteractsWithSockets, SerializesModels;

    public $user; // Defina a propriedade para armazenar o usuário

    public function __construct(User $user)
    {
        $this->user = $user; // Inicialize a propriedade $user com o usuário autenticado
    }
}
