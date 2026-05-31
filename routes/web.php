<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\OrderController;
use App\Http\Controllers\VoteController;

Route::get('/', function () {
    return view('home');
});

Route::get('/ticket', [OrderController::class, 'index']);
Route::post('/order', [OrderController::class, 'store']);
Route::get('/vote', [VoteController::class, 'index']);
Route::post('/vote', [VoteController::class, 'store']);