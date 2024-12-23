<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnqueteController;
use App\Http\Controllers\UserController;

// Rota para o formulário de login (GET) e para processar o login (POST)
Route::get('/index', [AuthController::class, 'index'])->name('login');
Route::post('/index', [AuthController::class, 'index'])->name('login.post');

// Rota para o formulário de cadastro (GET) e para processar o cadastro (POST)
Route::get('/cadastro', [UserController::class, 'cadastroForm'])->name('cadastro');
Route::post('/cadastro', [UserController::class, 'cadastro'])->name('cadastro.post');


