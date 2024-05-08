<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/api/users-with-domicilios', [UserController::class, 'getAllUsersWithDomicilios']);
Route::get('/api/users-with-domicilios-and-age', [UserController::class, 'getAllUsersWithDomiciliosAndAge']);