<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UsercController extends Controller
{
    /**
     * Display a listing of the resource with log count.
     */
    public function index()
    {
        // Certifique-se de que está carregando os usuários com a contagem de logs
        $users = User::withCount('logs')->get(); // Conta os logs para cada usuário

        // Passa os dados para a view
        return view('logs.index', compact('users'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('users.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        User::create($request->all());

        return redirect()->route('auth.log')->with('success', 'Usuário criado com sucesso');
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        // Este método pode ser usado para exibir um usuário específico
        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $user = User::findOrFail($id);

        return view('users.edit', compact('user'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $user->update($request->all());

        return redirect()->route('users.index')->with('success', 'Usuário atualizado com sucesso');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $user = User::findOrFail($id);

        $user->delete();

        return redirect()->route('users.index')->with('success', 'Usuário deletado com sucesso');
    }
}