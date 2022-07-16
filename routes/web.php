<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\todoController;
use App\Http\Controllers\AuthorController;

Route::get('/', [todoController::class, 'index']);
Route::post('/', [todoController::class, 'post']);
Route::get('/verror', [todoController::class, 'verror']);

Route::get('/add', [AuthorController::class, 'add']);
Route::post('/add', [AuthorController::class, 'create']);
Route::get('/create-page', 'todoController@createPage');
Route::post('/create', 'todoController@create');



