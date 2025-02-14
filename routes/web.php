<?php
use App\Http\Controllers\AuthController;
use App\Http\Controllers\ContaController;
use Illuminate\Support\Facades\Route;
 
Route::get('/', function () {
    return view('contas.create');
});

Route::get('/create-conta' , [ContaController::class, 'create'])->name('conta.create');

Route::get('/index-conta' , [ContaController::class, 'index'])->name('conta.index');

Route::post('/store-conta' , [ContaController::class, 'store'])->name('conta.store');

Route::get('/show-conta', [ContaController::class, 'show'])->name('conta.show');

Route::get('/edit-conta' , [ContaController::class, 'edit'])->name('conta.edit');

Route::put('/update-conta' , [ContaController::class, 'update'])->name('conta.update');

Route::delete('/destroy-conta' , [ContaController::class, 'destroy'])->name('conta.destroy');

Route::get('/contas', [ContaController::class, 'index']);











?>
