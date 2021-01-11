<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UsuarioController;

Route::get('/', [UsuarioController::class, 'index']);
Route::get('/cadastro', [UsuarioController::class, 'create']);
Route::post('usuario/insert', [UsuarioController::class, 'store']);
Route::get('usuario/{id}', [UsuarioController::class, 'show']);
Route::get('usuario/editar/{id}', [UsuarioController::class, 'edit']);
Route::post('usuario/editar/update/{id}', [UsuarioController::class, 'update']);
Route::post('usuario/insert', [UsuarioController::class, 'store']);
Route::get('usuario/delete/{id}', [UsuarioController::class, 'destroy']);
