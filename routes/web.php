<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApplicationController;

Route::get('/', [ApplicationController::class, 'index'])->name('home');
Route::get('/applications/{id}', [ApplicationController::class, 'show'])->name('show');