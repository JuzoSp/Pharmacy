<?php

use App\Http\Controllers\AccountController;
use App\Http\Controllers\MagasinController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SuperAdminController;
use App\Http\Controllers\ProduitController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/



// Route::get('/', function () {
//     return view('welcome');
// });

//SuperAdmin
Route::middleware(['auth', 'superadmin'])->group(function () {
    Route::get('/superadmin/dashboard', [SuperAdminController::class, 'dashboard'])->name('superadmin.dashboard');
    // Ajoutez d'autres routes pour les fonctionnalités du super administrateur
});

// Account
Route::controller(AccountController::class)->group(function () {
    Route::get('/', 'welcome')->name('welcome');
    Route::get('login', 'login')->name('login');

    //Registration
    Route::get('register', 'register')->name('register.customer');
    Route::post('register', 'store')->name('register.customer.store');
});


//Magasin
Route::get('/magasin', [MagasinController::class, 'index'])->name('magasins.index');
Route::get('/magasin/create', [MagasinController::class, 'create'])->name('magasins.create');
Route::post('/magasin', [MagasinController::class, 'store'])->name('magasins.store');
Route::delete('/magasin/{id}', [MagasinController::class, 'destroy'])->name('magasin.destroy');

//Produits
Route::get('/produits', [ProduitController::class, 'index'])->name('produits.index');
Route::get('/produits/create', [ProduitController::class, 'create'])->name('produits.create');
Route::post('/produits/store', [ProduitController::class, 'store'])->name('produits.store');
Route::get('/produits/{id}/edit', [ProduitController::class, 'edit'])->name('produits.edit');
Route::put('/produits/{id}', [ProduitController::class, 'update'])->name('produits.update');
Route::delete('/produits/{id}', [ProduitController::class, 'destroy'])->name('produits.destroy');
