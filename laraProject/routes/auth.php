<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ModifiedUserController;
use App\Http\Controllers\Auth\ModifiedStaffController;

use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {
    Route::get('register', [RegisteredUserController::class, 'create'])
                ->name('register');

    Route::post('register', [RegisteredUserController::class, 'store']);

    Route::get('login', [AuthenticatedSessionController::class, 'create'])
                ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

Route::middleware('auth')->group(function () {
    // questa rotta rimanda alla giusta vista: user, staff, admin
    Route::get('/account', [AuthenticatedSessionController::class, 'rimanda'])
            ->name('account');

    Route::post('logout', [AuthenticatedSessionController::class, 'destroy'])
                ->name('logout');

    Route::get('/modifica-user', [ModifiedUserController::class, 'update'])
            ->name('modifica-user');

    Route::post('modifica-user', [ModifiedUserController::class, 'store']);

    Route::get('/modifica-staff', [ModifiedStaffController::class, 'update'])
            ->name('modifica-staff');
    
    Route::post('modifica-staff', [ModifiedStaffController::class, 'store']);
});