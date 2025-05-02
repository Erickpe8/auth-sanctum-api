<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;

// Para ver usuarios desde el navegador con GET 
Route::get('/register', function () {
    return response()->json([
        'message' => 'Usuarios registrados',
        'users' => \App\Models\User::all()
    ]);
});

// Para registrar desde Postman con POST
Route::post('/register', [AuthController::class, 'register']);

// Login y usuario autenticado
Route::post('/login', [AuthController::class, 'login']);
Route::middleware('auth:sanctum')->get('/user', [AuthController::class, 'user']);
