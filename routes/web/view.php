<?php

use App\Http\Controllers\viewController;
use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;

Route::get('/', [ViewController::class, 'index'])->name('home');
