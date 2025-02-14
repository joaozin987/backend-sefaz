<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Route;
    
Route::get('/' , function(){
    return view('welcome');
});

Route::get('/index-conta' , [ContaController::class, 'index'])->name('conta.index');

Route::get('/create-conta' , [ContaController::class, 'create'])->name('conta.create');

Route::post('/store-conta' , [ContaController::class, 'store'])->name('conta.store');

Route::get('/show-conta', [ContaController::class, 'show'])->name('conta.show');

Route::get('/edit-conta' , [ContaController::class, 'edit'])->name('conta.edit');

Route::put('/update-conta' , [ContaController::class, 'update'])->name('conta.update');

Route::delete('/destroy-conta' , [ContaController::class, 'destroy'])->name('conta.destroy');












?>
