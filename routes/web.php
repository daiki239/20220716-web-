<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;

Route::get('/', [todoController::class, 'index']);
Route::get('/find', [todoController::class, 'find']);
Route::post('/find', [todoController::class, 'search']);
// 追記：ここから
Route::get('/add', [todoController::class, 'add']);
Route::post('/add', [todoController::class, 'create']);
// 追記：ここまで