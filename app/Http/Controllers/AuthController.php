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
    
}

