<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\Auth\AuthenticatedSessionController;
use App\Http\Controllers\Auth\ModifiedOfferController;
use App\Http\Controllers\ModifiedCompanyController;
use App\Http\Controllers\Auth\ModifiedStaffController;
use App\Http\Controllers\Auth\ModifiedUserController;
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

/**
 * ROTTE DI LIVELLO 0
 */

 // Redirect alla homepage
Route::get('/', function () {
    return view('home');
})
    ->name('home');

// Mostra la lista di tutte le aziende
Route::get('/lista-aziende', [PublicController::class, 'showListaAziende'])
    ->name('lista-aziende');

// Mostra la pagina dell'azienda selezionata
Route::get('/lista-aziende/{azienda}', [PublicController::class, 'showCompany'])
    ->name('azienda');

// Mostra le aziende per tipologia
Route::get('/lista-azienda/{tipologia}', [PublicController::class, 'showListaAziendePerTipologia'])
    ->name('tipologia');

// Mostra la pagina con la lista di tutte le offerte
Route::get('/lista-offerte', [PublicController::class, 'showListaOfferte'])
    ->name('lista-offerte');

// Mostra la pagina dell'azienda selezionata
Route::get('/lista-offerte/{offerta}', [PublicController::class, 'showOffer'])
    ->name('offerta');

// Effettua la ricerca delle offerte
Route::get('/cerca-offerte', [PublicController::class, 'searchOffers'])
    ->name('cerca-offerte');

// Mostra la pagina delle faq
Route::get('faq', [PublicController::class, 'showFaq'])
    ->name('faq');

Route::get('/search', [PublicController::class, 'search'])
    ->name('search');



 /**
 * ROTTE DI LIVELLO 1
 */
Route::middleware('can:isUser')->group(function(){

    // Mostra la dashboard dell'utente di tipo User
    Route::get('/user', [UserController::class, 'index'])
        ->name('user');

    // Permette all'utente di modificare le proprie credenziali
    Route::get('/modifica-user', [ModifiedUserController::class, 'update'])
        ->name('modifica-user');

    Route::post('modifica-user', [ModifiedUserController::class, 'store']);

    // Permette all'utente di acquisire il coupon
    Route::get('/coupon-acquisito/{id}/{userId}', [UserController::class, 'creaCoupon'])
        ->name('coupon-acquisito');

});

 /**
 * ROTTE DI LIVELLO 2
 */
Route::middleware('can:isStaff')->group(function(){

    // Mostra la dashboard dell'utente di tipo Staff
    Route::get('/staff', [StaffController::class, 'index'])
        ->name('staff');

    // Permette all'utente di modificare le proprie credenziali
    Route::get('/modifica-staff/{username}/{livello}', [ModifiedStaffController::class, 'update'])
        ->name('modifica-staff');

    Route::post('modifica-staff/{username}/{livello}', [ModifiedStaffController::class, 'store']);

    // Permette la visualizzazione della tabella delle offerte
    Route::get('/tabella-offerte', [StaffController::class,'showTabellaOfferte' ])
        ->name('tabella-offerte');

    // Permette all'utente di modificare un'offerta
    Route::get('/modifica-offerta/{id}', [ModifiedOfferController::class, 'updatePromo'])
        ->name('modifica-offerta');

    Route::post('/modifica-offerta/{id}', [ModifiedOfferController::class, 'store']);
//Route::post('/staff/modifica-offerta/', [ModifiedOfferController::class, 'store']);

    // Permette l'aggiunta di un'offerta
    Route::get('/aggiunta-offerta', [StaffController::class, 'addPromo'])
        ->name('aggiunta-offerta');

    Route::post('/aggiunta-offerta', [StaffController::class, 'storePromo']);

    // Permette l'elminazione di un'offerta
    Route::delete('/delete-promo/{id}', [StaffController::class, 'deletePromo'])
        ->name('delete-promo');

});

 /**
 * ROTTE DI LIVELLO 3
 */
Route::middleware('can:isAdmin')->group(function(){

    // Mostra la dashboard dell'utente di tipo Admin
    Route::get('/admin', [AdminController::class, 'index'])
        ->name('admin');

    // Permette la creazione di una faq
    Route::get('crea-faq',[AdminController::class, 'createFaq'])
        ->name('crea-faq');
    
    Route::post('crea-faq', [AdminController::class, 'storeFaq']);

    // Permette di visuallizare la tabella delle faqs
    Route::get('tabella-faq', [AdminController::class, 'showTabellaFaq'])
        ->name('tabella-faq');

    // Permette di aggiungere una faq 
    Route::get('aggiunta-faq',[AdminController::class, 'createFaq'])
        ->name('aggiunta-faq');

    Route::post('aggiunta-faq',[AdminController::class, 'storeFaq']);

    // Permette di visuallizare una singola faq
    Route::post('/faq', [AdminController::class, 'storeFaq']);
    
    // Permette di eliminare una faq
    Route::delete('/delete-faq/{id}', [AdminController::class, 'deleteFaq'])
        ->name('delete-faq');
    
    // Permette di modificare una faq
    Route::get('/modifica-faq/{id}', [AdminController::class, 'updateFaq'])
        ->name('modifica-faq'); 

    Route::post('/modifica-faq/{id}', [AdminController::class, 'storeFaqs']);

    // Permette di aggiungere un'azienda
    Route::get('/aggiunta-azienda', [AdminController::class, 'createAzienda'])
        ->name('aggiunta-azienda');
    
    Route::post('/aggiunta-azienda', [AdminController::class, 'storeAzienda']);

    // Permette all'admin di modificare un'azienda
    Route::get('/modifica-azienda/{company}', [ModifiedCompanyController::class, 'updatePromo'])
        ->name('modifica-azienda');

    Route::post('/modifica-azienda/{company}', [ModifiedCompanyController::class, 'store']);

    // Permette di eliminare un'azienda
    Route::delete('/delete-azienda/{id}', [AdminController::class, 'deleteAzienda'])
        ->name('delete-azienda');

    // Mostra la lista di tutti gli utenti di tipo User
    Route::get('/lista-user', [UserController::class, 'showUser'])
        ->name('lista-user');

    // Mostra la lista di tutti gli utenti di tipo Staff
    Route::get('/lista-staff', [AdminController::class, 'showStaff'])
        ->name('lista-staff');

        // Permette all'utente di modificare le credenziali di un membro dello staff
    Route::get('/modifica-staff/{username}/{livello}', [ModifiedStaffController::class, 'update'])
        ->name('modifica-staff');

    Route::post('modifica-staff/{username}/{livello}', [ModifiedStaffController::class, 'store']);

    // Permette di eliminare un utente di tipo User o Staff
    Route::delete('/elimina-utente/{username}', [AdminController::class, 'deleteUser'])
        ->name('elimina-utente');

    // Permette di creare un utente di tipo Staff
    Route::get('/aggiunta-staff', [AdminController::class, 'createStaff'])
        ->name('aggiunta-staff');

    Route::post('/aggiunta-staff', [AdminController::class, 'storeStaff']);

    // ???
    Route::get('(/staffView/{user}', [AdminController::class, 'viewStaff'])
        ->name('staffView');

    Route::get('(/contaCoupon/{user}', [AdminController::class, 'contaCoupon'])
        ->name('contaCoupon');

    Route::get('(/statistiche', [AdminController::class, 'statistiche'])
        ->name('statistiche');

});

/**
 *  Per avere il collegamento con le rotte del file auth.php
 */
require __DIR__ . '/auth.php';