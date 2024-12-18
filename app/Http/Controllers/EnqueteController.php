<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EnqueteController extends Controller
{
    // Método para exibir o formulário de criação de enquete
    public function create()
    {
        return view('enquetes.create'); // Retorna a view de criação de enquete
    }

    // Método para armazenar a enquete
    public function store(Request $request)
    {
        // Lógica para salvar a enquete no banco de dados
    }
}
