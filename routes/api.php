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

Route::get('/applications/{applicationId}/news', [FollowController::class, 'index'])->name('apinewsindex');
Route::delete('/applications/{applicationId}/news/{newsId}', [FollowController::class, 'destroy'])->name('apinewsdestroy');
Route::post('/applications/{applicationId}/news', [FollowController::class, 'store'])->name('apinewsstore');
Route::put('/applications/{applicationId}/news/{newsId}', [FollowController::class, 'update'])->name('apinewsupdate');
Route::get('/applications/{applicationId}/news/{newsId}',[FollowController::class, 'show'])->name('apinewsshow');