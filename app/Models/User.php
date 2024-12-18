<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    protected $fillable = [
        'name', // Para compatibilidade com o Laravel
        'nome', // Campo adicional usado na sua tabela
        'email',
        'password',
    ];

    protected $hidden = [
        'password',
        'remember_token',
    ];
}

