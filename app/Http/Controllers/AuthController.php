<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;


class AuthController extends Controller
{

    public function index()
    {
        return view('auth.index'); // Certifique-se de que a view 'auth.login' existe
    }
    // Exibe a página de cadastro
    public function cadastroForm()
    {
        return view('auth.cadastro');
    }

    // Processa o cadastro do usuário
    public function cadastro(Request $request)
    {
        // Validação dos dados
        $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|unique:users,email',
            'password' => 'required|string|min:6',
        ]);

        // Criar o usuário no banco de dados
        User::create([
            'nome' => $request->name, // Aqui preenche o campo 'nome'
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        // Redirecionar ou retornar sucesso
        return redirect()->route('login')->with('success', 'Cadastro realizado com sucesso!');
    }
}

