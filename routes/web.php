<?php

use App\Http\Controllers\admin\EnterpriseController;
use App\Http\Controllers\admin\UserController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserMedicamentoController;
use Illuminate\Support\Facades\Route;

//Rotas do Usuário
Route::get('/users/create', [UserController::class, 'create'])->name('users.create');
Route::delete('/users/{user}/destroy', [UserController::class, 'destroy'])->name('users.destroy');
Route::get('/users/{user}', [UserController::class, 'show'])->name('users.show');
Route::put('/users/{user}', [UserController::class, 'update'])->name('users.update');
Route::get('/users/{user}/edit', [UserController::class, 'edit'])->name('users.edit');
Route::post('/users', [UserController::class, 'store'])->name('users.store')->can('administrator');
Route::get('/users', [UserController::class, 'index'])->name('users.index')->can('administrator');

//Rotas Medicamentos Usuarios
Route::get('/usersmedicamentos', [UserMedicamentoController::class, 'index'])->name('usersmedicamentos.index')->can('administrator');

//Rotas das Empresas
Route::post('/enterprises', [EnterpriseController::class, 'store'])->name('enterprises.store');
Route::get('/enterprises/create', [EnterpriseController::class, 'create'])->name('enterprises.create');
Route::get('/enterprises', [EnterpriseController::class, 'index'])->name('enterprises.index');

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
