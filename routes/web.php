<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CadastroController;
use App\Http\Controllers\HomeController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Login.login');
});

Route::get('/Login', [LoginController::class, 'aceppt'])->name('Login');
Route::post('/Login', [LoginController::class, 'loginAttempt'])->name('auth');

Route::get('/Cadastro', [CadastroController::class, 'index'])->name('Cadastro');
Route::post('/Cadastro', [CadastroController::class, 'cadastroAttempt'])->name('auth');

Route::middleware(['auth'])->group(function(){
    Route::get('/Home', function(){
        return view('Home');
    })->name('Home');
});