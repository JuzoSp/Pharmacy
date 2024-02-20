<?php

use App\Http\Controllers\MagasinController;
use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Magasin
    Route::get('/magasins', [MagasinController::class, 'index'])->name('magasin.index');
    Route::get('/magasins/create', [MagasinController::class, 'create'])->name('magasin.create');
    Route::post('/magasins', [MagasinController::class, 'store'])->name('magasin.store');
    Route::delete('/magasins/{id}', [MagasinController::class, 'destroy'])->name('magasin.destroy');
});

require __DIR__ . '/auth.php';
