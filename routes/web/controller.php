<?php

use App\Http\Controllers\ClienteControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MeuControlador;
use Illuminate\Http\Request;

Route::get('/', [MeuControlador::class, 'home'])->name('home');
Route::get('/nome', [MeuControlador::class, 'nome'])->name('nome');
Route::get('/idade', [MeuControlador::class, 'idade'])->name('idade');
Route::get('/produtos', [MeuControlador::class, 'idade'])->name('idade');
Route::get('/multiplicar/{n1?}/{n2?}', [MeuControlador::class, 'multiplicar'])->name('multiplicar');

Route::resource("clientes", ClienteControlador::class);
