<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Http\Controllers\Controller;

class DashboardController extends Controller
{
    public function index()
    {
        // Verifica se o usuário está autenticado
        if (Auth::check()) {
            // Obtém o usuário autenticado
            $user = Auth::user();
            // Retorna a view do dashboard, passando os detalhes do usuário
            return view('admin.dashboard', compact('user'));
        } else {
            // Se o usuário não estiver autenticado, redireciona para a página de login
            return redirect()->route('login');
        }
    }
}
