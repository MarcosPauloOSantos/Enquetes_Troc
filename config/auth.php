<?php

return [

    'defaults' => [
        'guard' => env('AUTH_GUARD', 'web'),
        'passwords' => env('AUTH_PASSWORD_BROKER', 'users'),  // Usando 'users'
    ],

    'guards' => [
        'web' => [
            'driver' => 'session',
            'provider' => 'users',  // Referência ao provedor 'users'
        ],
    ],

    'providers' => [
        'users' => [  // Usando 'users'
            'driver' => 'eloquent',
            'model' => App\Models\User::class,  // O modelo que usa a tabela 'users'
        ],
    ],

    'passwords' => [
        'users' => [  // Usando 'users' para o reset de senha
            'provider' => 'users',
            'table' => env('AUTH_PASSWORD_RESET_TOKEN_TABLE', 'password_reset_tokens'),
            'expire' => 60,
            'throttle' => 60,
        ],
    ],

    'password_timeout' => env('AUTH_PASSWORD_TIMEOUT', 10800),

];

