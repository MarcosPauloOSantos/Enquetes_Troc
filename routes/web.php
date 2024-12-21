<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EnqueteController;


// Rota para processar o login
Route::get('/index', [AuthController::class, 'index'])->name('login');
Route::post('/index', [AuthController::class, 'index'])->name('login.post');


// Rota para o formulário de cadastro (GET) e para processar o cadastro (POST)
Route::get('/cadastro', [AuthController::class, 'cadastroForm'])->name('cadastro');
Route::post('/cadastro', [AuthController::class, 'cadastro'])->name('cadastro.post');



