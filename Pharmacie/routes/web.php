<?php

use App\Http\Controllers\MagasinController;
use Illuminate\Support\Facades\Route;

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




//Magasin
Route::get('/magasin', [MagasinController::class, 'index'])->name('magasins.index');
Route::get('/magasin/create', [MagasinController::class, 'create'])->name('magasins.create');
Route::post('/magasin', [MagasinController::class, 'store'])->name('magasins.store');
Route::delete('/magasin/{id}', [MagasinController::class, 'destroy'])->name('magasin.destroy');
