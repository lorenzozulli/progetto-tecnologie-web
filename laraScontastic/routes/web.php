<?php

use Illuminate\Support\Facades\Route;

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

// Rotte relative alla pagina dell'azienda
Route::get('/lista-aziende', [PublicController::class, 'showListaAziende'])
    ->name('lista-aziende');

Route::get('/lista-aziende/{azienda}', [PublicController::class, 'showAzienda'])
    ->name('{azienda}');

//Rotte relative all'utente di livello1 loggato

Route::get('/user', [UserController::class, 'index'])
    ->name('user')->middleware('can:isUser');

Route::post('/modifica-dati', [UserController::class, 'updateData'])
    ->name('modifica-dati');

//Rotte relative all'utente di livello2 loggato
Route::get('/user', [StaffController::class, 'index'])
    ->name('user')->middleware('can:isUser');

Route::get('/modifica-dati', [StaffController::class, 'updateData'])
->name('modifica-dati');

Route::post('/user/aggiungi-promo', [StaffController::class, 'addPromo'])
->name('aggiungi-promo');

Route::post('/user/modifica-promo', [StaffController::class, 'updatePromo'])
->name('modifica-promo');


//Rotte relative all'admin

Route::get('/admin/newproduct', [AdminController::class, 'addProduct'])
    ->name('newproduct');

Route::post('/admin/newproduct', [AdminController::class, 'storeProduct'])
    ->name('newproduct.store');



//rotta faq
Route::view('faq', 'faq')
    ->name('faq');
