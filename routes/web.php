<?php

use App\Http\Controllers\LoginController;
use App\Http\Controllers\TasksController;
use App\Http\Controllers\UsersController;
use App\Http\Middleware\Autenticador;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect('/tasks');
})->middleware(Autenticador::class);

Route::resource('/tasks', controller: TasksController::class)->except(['show']);

Route::get('/login', [LoginController::class, 'index'])->name('login');
Route::post('/login', [LoginController::class, 'store'])->name('signin');

Route::get('/register', [UsersController::class, 'create'])->name('users.create');
Route::post('/register', [UsersController::class, 'store'])->name('users.store');
