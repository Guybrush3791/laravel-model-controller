<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index']);
Route::get('/student', [MainController::class, 'getStudent']);
Route::get('/students', [MainController::class, 'getStudents']);
