<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Models\ActionLog;

class LogController extends Controller
{
    public function index()
    {
        // Carregar todos os usuários com a contagem de logs
        $users = User::withCount('logs')->get();
        return view('logs.index', compact('users'));
    }

    public function show($userId)
    {
        // Buscar o usuário
        $user = User::findOrFail($userId);
        
        // Buscar os logs específicos do usuário
        $logs = ActionLog::where('user_id', $userId)->get();
        
        // Passar o usuário e os logs para a view
        return view('logs.show', compact('logs', 'user'));
    }
}