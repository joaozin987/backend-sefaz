<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('Home.home');
});

Route::get('/Home', function () {
    return view('Home.home');
})->name('Home');

Route::get('/Cadastro', function () {
    return view('Cadastro.cadastro');
})->name('Cadastro');


Route::get('/Login', function () {
    return view('Login.login');
})->name('Login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
