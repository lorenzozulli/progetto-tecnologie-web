<?php

use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\ModifiedUserController;
use App\Http\Controllers\Auth\ModifiedStaffController;
use App\Http\Controllers\Auth\ModifiedOfferController;
use App\Http\Controllers\StaffController;

use Illuminate\Support\Facades\Route;

/**
 * ROTTE PER I GUESTS
 */
Route::middleware('guest')->group(function () {

    // Rotte per la registrazione
    Route::get('register', [RegisteredUserController::class, 'create'])
        ->name('register');
        
    Route::post('register', [RegisteredUserController::class, 'store']);

    // Rotte per il login
    Route::get('login', [AuthenticatedSessionController::class, 'create'])
        ->name('login');

    Route::post('login', [AuthenticatedSessionController::class, 'store']);
});

/**
 *  ROTTE PER TUTTI GLI AUTENTICATI
 */
Route::middleware('auth')->group(function () {

    // Rotta per il logout    
    Route::post('/logout', [AuthenticatedSessionController::class, 'destroy'])
        ->name('logout');
});