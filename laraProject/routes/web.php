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

// Mostra la lista di tutte le aziende
Route::get('/lista-aziende', [PublicController::class, 'showListaAziende'])
    ->name('lista-aziende');


// Mostra la pagina dell'azienda selezionata
Route::get('/lista-aziende/{azienda}', [PublicController::class, 'showCompany'])
    ->name('azienda');

// Mostra tutte le aziende della tipologia specificata
Route::get('/lista-azienda/{tipologia}', [PublicController::class, 'showListaAziendePerTipologia'])
    ->name('tipologia');

// Mostra l'elenco di tutte le offerte
Route::get('/lista-offerte', [PublicController::class, 'showListaOfferte'])
    ->name('lista-offerte');

// Mostra la pagina dell'offerta selezionata
Route::get('/lista-offerte/{offerta}', [PublicController::class, 'showOffer'])
    ->name('offerta');

// Mostra le offerte che hanno un determinato nome o una determinata descrizione
Route::get('/cerca-offerte', [PublicController::class, 'searchOfferForNameOrDescription'])
    ->name('cerca-offerte');

// Mostra tutte le offerte dell'azienda specificata
Route::get('/cerca-aziende', [PublicController::class, 'searchOfferForCompany'])
    ->name('cerca-aziende');

/* --- Rotte relative allo User --- */
// Mostra la pagina dell'utente di tipo User
Route::get('/user', [UserController::class, 'index'])
    ->name('user');
    // ->middleware('can:isUser');
    Route::get('/lista-user', [UserController::class, 'showUser'])
    ->name('lista-user');
    //rotta che mostra la lista di utenti

    Route::get('/coupon-acquisito/{id}/{userId}', [UserController::class, 'creaCoupon'])
    ->name('coupon-acquisito');

/* --- Rotte relative allo Staff  --- */
// Mostra la pagina dell'utente di tipo Staff
Route::get('/staff', [StaffController::class, 'index'])
    ->name('staff');
    // ->middleware('can:isUser');



    Route::get('/staff/modifica-offerta/', [ModifiedOfferController::class, 'updatePromo'])
    ->name('modifica-offerta');

        Route::post('/staff/modifica-offerta/', [ModifiedOfferController::class, 'store']);

//Route::get('/profile', [StaffController::class, 'showData'])
  //  ->name('profile');
// Apre la form per l'aggiunta di un'offerta
Route::get('/staff/aggiunta-offerta', [StaffController::class, 'addPromo'])
  ->name('aggiunta-offerta');

Route::post('/staff/aggiunta-offerta', [StaffController::class, 'storePromo'])
    ->name('aggiunta-offerta');

// Permette di cancellare un'offerta
Route::delete('/delete-promo/{id}', [StaffController::class, 'deletePromo'])
        ->name('delete-promo');

// Permette di cancellare un'utente       

Route::delete('/elimina-utente/{username}', [AdminController::class, 'deleteUser'])
        ->name('elimina-utente');



/* --- Rotte relative all'Admin loggato --- */
Route::get('/admin', [AdminController::class, 'index'])
    ->name('admin')->middleware('auth');

Route::get('/admin/newproduct', [AdminController::class, 'addProduct'])
    ->name('newproduct');

Route::post('/admin/newproduct', [AdminController::class, 'storeProduct'])
    ->name('newproduct.store');
// rotte che gestiscono lo staff
    //Route::get('/admin/gestisci-staff', [AdminController::class, 'showStaff'])
    //->name('gestisci-staff');
    Route::get('/admin/lista-staff', [AdminController::class, 'showStaff'])
        ->name('lista-staff');

Route::delete('/delete-azienda/{id}', [AdminController::class, 'deleteAzienda'])
        ->name('delete-azienda');

        //questa rotta aggiunge un'azienda
Route::get('/admin/aggiunta-azienda', [AdminController::class, 'createAzienda'])
    ->name('aggiunta-azienda');

Route::post('/admin/aggiunta-azienda', [AdminController::class, 'storeAzienda'])
    ->name('aggiunta-azienda');

Route::get('/admin/aggiunta-staff', [AdminController::class, 'createStaff'])
    ->name('aggiunta-staff');

Route::post('/admin/aggiunta-staff', [AdminController::class, 'storeStaff']);

//Visualizza un determinato membro della staff
Route::get('(/admin/staffView/{user}', [AdminController::class, 'viewStaff'])
    ->name('staffView');



/* --- Rotte relative alle FAQ --- */
Route::get('faq', [PublicController::class, 'showFaq'])
    ->name('faq');


/* --- Inclusione delle rotte di auth.php --- */
require __DIR__ . '/auth.php';