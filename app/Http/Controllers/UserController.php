<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    //
    // Exibe a página de cadastro
    public function cadastroForm()
    {
        return view('auth.cadastro');
    }

    // Processa o cadastro do usuário
    public function cadastro(Request $request)
    {
        $user = new User();
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);
        // Criar o usuário no banco de dados
        $user->create([
            'nome' => $request->name, // Aqui preenche o campo 'nome'
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);
        dd($user);
        // Redirecionar ou retornar sucesso
        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }
}
