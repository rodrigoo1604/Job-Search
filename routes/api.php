<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\ApplicationController;
use App\Http\Controllers\Api\FollowController;

Route::get('/applications', [ApplicationController::class, 'index'])->name('apihome');
Route::delete('/applications/{id}', [ApplicationController::class, 'destroy'])->name('apidestroy');
Route::post('/applications', [ApplicationController::class, 'store'])->name('apistore');
Route::put('/applications/{id}', [ApplicationController::class, 'update'])->name('apiupdate');
Route::get('/applications/{id}',[ApplicationController::class, 'show'])->name('apishow');

Route::post('/applications/{applicationId}/follows',[FollowController::class, 'store']);