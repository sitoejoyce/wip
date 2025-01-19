<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserLogController extends Controller
{
    /**
     * Método para exibir todos os usuários com a contagem de logs
     */
    public function index()
    {
        // Carregar todos os usuários com a contagem de logs
        $users = User::withCount('logs')->get();
    
        return view('logs.index', compact('users'));
    }
    /**
     * Método para exibir os logs de um usuário específico
     */
    public function show($userId)
    {
        // Buscar o usuário pelo ID
        $user = User::findOrFail($userId);

        // Buscar os logs relacionados a esse usuário
        $logs = $user->logs;  // O relacionamento "logs" já foi definido no modelo User

        // Passar o usuário e os logs para a view
        return view('logs.show', compact('user', 'logs'));
    }
}
