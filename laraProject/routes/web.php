<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ModifiedOfferController;
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
Route::get('/lista-aziende/{azienda}', [PublicController::class, 'showCompany'])
    ->name('azienda');

// questa rotta mostra tutte le aziende della tipologia specificata
Route::get('/lista-azienda/{tipologia}', [PublicController::class, 'showListaAziendePerTipologia'])
    ->name('tipologia');


// questa rotta mostra l'elenco di tutte le offerte
Route::get('/lista-offerte', [PublicController::class, 'showListaOfferte'])
    ->name('lista-offerte');


// questa rotta mostra la pagina di un'offerta
Route::get('/lista-offerte/{offerta}', [PublicController::class, 'showOffer'])
    ->name('offerta');

Route::get('/cerca-offerte', [PublicController::class, 'searchOffer'])
    ->name('cerca-offerte');

Route::get('/cerca-aziende', [PublicController::class, 'searchCompany'])
    ->name('cerca-aziende');

/* --- Rotte relative allo User --- */
Route::get('/user', [UserController::class, 'index'])
    ->name('user');
    // ->middleware('can:isUser');

/* --- Rotte relative allo Staff loggato --- */
Route::get('/staff', [StaffController::class, 'index'])
    ->name('staff');
    // ->middleware('can:isUser');

//Route::get('/profile', [StaffController::class, 'showData'])
  //  ->name('profile');
Route::get('/staff/aggiunta-offerta', [StaffController::class, 'addPromo'])
  ->name('aggiunta-offerta');

Route::post('/staff/aggiunta-offerta', [StaffController::class, 'storePromo'])
    ->name('aggiunta-offerta');


Route::delete('/delete-promo/{id}', [StaffController::class, 'deletePromo'])
        ->name('delete-promo');

Route::get('/elimina-utente}', [AdminController::class, 'show'])
        ->name('elimina-utente');

Route::delete('/elimina-utente/{username}', [AdminController::class, 'deleteUser']);



/* --- Rotte relative all'Admin loggato --- */
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin')->middleware('auth');
Route::get('/admin/newproduct', [AdminController::class, 'addProduct'])
    ->name('newproduct');

Route::post('/admin/newproduct', [AdminController::class, 'storeProduct'])
    ->name('newproduct.store');

    Route::get('/admin/gestisci-staff', [AdminController::class, 'showStaff'])
    ->name('gestisci-staff');

Route::delete('/delete-azienda/{id}', [AdminController::class, 'deleteAzienda'])
    ->name('delete-azienda');

Route::get('/admin/aggiunta-azienda', [AdminController::class, 'createAzienda'])
    ->name('aggiunta-azienda');

Route::post('/admin/aggiunta-azienda', [AdminController::class, 'storeAzienda'])
    ->name('aggiunta-azienda');



/* --- Rotte relative alle FAQ --- */
Route::get('faq', [PublicController::class, 'showFaq'])
    ->name('faq');


require __DIR__ . '/auth.php';