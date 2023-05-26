<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\StaffController;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('home');
})
    ->name('home');

/* ---  Rotte relative alla pagina dell'azienda --- */

// questa rotta mostra la lista di tutte le aziende
Route::get('/lista-aziende', [PublicController::class, 'showListaAziende'])
    ->name('lista-aziende');


// questa rotta mostra la pagina di un'azienda specifica
Route::get('/{azienda}', [PublicController::class, 'showCompany'])
    ->name('azienda');


// questa rotta mostra l'elenco di tutte le offerte
Route::get('/lista-offerte', [PublicController::class, 'showListaOfferte'])
    ->name('lista-offerte');


// questa rotta mostra la pagina di un'offerta
Route::get('/{offerta}', [PublicController::class, 'showOffer'])
    ->name('offerta');

/* --- Rotte relative allo User --- */
Route::get('/user', [UserController::class, 'index'])
    ->name('user');
    // ->middleware('can:isUser');

Route::get('/modifica-user', [UserController::class, 'updateData'])
    ->name('modifica-user');

/* --- Rotte relative allo Staff loggato --- */
Route::get('/staff', [StaffController::class, 'index'])
    ->name('staff');
    // ->middleware('can:isUser');

Route::get('/profile', [StaffController::class, 'showData'])
    ->name('profile');

Route::post('/modify-data', [StaffController::class, 'updateData'])
    ->name('modify-data');

Route::post('/user/aggiungi-promo', [StaffController::class, 'addPromo'])
    ->name('aggiungi-promo');

Route::post('/user/modifica-promo', [StaffController::class, 'updatePromo'])
    ->name('modifica-promo');


/* --- Rotte relative all'Admin loggato --- */
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin')->middleware('auth');
Route::get('/admin/newproduct', [AdminController::class, 'addProduct'])
    ->name('newproduct');

Route::post('/admin/newproduct', [AdminController::class, 'storeProduct'])
    ->name('newproduct.store');

/* --- Rotte relative alle FAQ --- */
Route::get('faq', [PublicController::class, 'showFaq'])
    ->name('faq');


    require __DIR__ . '/auth.php';