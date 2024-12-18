<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnqueteController;


// Rota para processar o login
Route::get('/login', [AuthController::class, 'index'])->name('login');
Route::post('/login', [AuthController::class, 'login'])->name('login.post');


// Rota para o formulário de cadastro (GET) e para processar o cadastro (POST)
Route::get('/cadastro', [AuthController::class, 'cadastroForm'])->name('cadastro');
Route::post('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro.post');


// Rotas protegidas por autenticação
Route::middleware('auth')->group(function () {
    Route::get('/home', [EnqueteController::class, 'index'])->name('home'); // Página inicial após login
    Route::get('/criar', [EnqueteController::class, 'create'])->name('enquete.create'); // Criar nova enquete
    Route::post('/criar', [EnqueteController::class, 'store'])->name('enquete.store'); // Processar criação da enquete
});
