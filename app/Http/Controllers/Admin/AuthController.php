<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Events\UserLoggedIn; // Adicione o namespace do evento
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthController extends Controller
{
    public function getLogin(){
        return view('Admin.auth.login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login')->with('success', 'Logout efetuado com sucesso');
    }

    public function postLogin(Request $request)
    {
        $request->validate([
            'email'=> 'required | email',
            'password'=> 'required',
        ]);

        $validated = auth()->attempt([
            'email' => $request->email,
            'password' => $request->password,
        ]);

        if ($validated) {
            // Dispara o evento UserLoggedIn e passa o usuário autenticado
            event(new UserLoggedIn(auth()->user()));

            if (auth()->user()->is_admin == 1) {
                return redirect()->route('dashboard')->with('success', 'Login efetuado com sucesso');
            } else {
                return redirect()->route('user.index')->with('success', 'Login efetuado com sucesso');
            }
        } else {
            return redirect()->back()->with('error', 'Email ou Senha inválidos');
        }
    }
}
