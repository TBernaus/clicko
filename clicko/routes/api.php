<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\API\UserController;

Route::apiResource('users', UserController::class);
Route::get('top-domains', [UserController::class, 'topDomains']);

