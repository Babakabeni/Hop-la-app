<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\FicheController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ListFicheController;

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
    Route::get('/fonctionnality', [HomeController::class, 'index'])->name('index.fonct');
    Route::get('/fiche', [FicheController::class, 'index'])->name('index.fiche');
    Route::post('/fiche', [FicheController::class, 'new'])->name('new.fiche');
    Route::get('/list_Fiche', [ListFicheController::class, 'index'])->name('index.listFiche');
    Route::get('/updateFiche/{id}/edit', [ListFicheController::class, 'show'])->name('show.fiche');
    Route::any('/updateFiche/{id}', [ListFicheController::class, 'update'])->name('update.fiche');
    Route::delete('/DeleteFiche/{id}', [ListFicheController::class, 'delete'])->name('delete.fiche');
    Route::get('/Admin', [AdminController::class, 'index'])->name('index.Admin');
    Route::get('/Admin/{id}', [AdminController::class, 'show'])->name('show.Admin');
    Route::any('/Admin/update/{id}', [AdminController::class, 'update'])->name('update.Admin');
    Route::delete('/Admin/delete/{id}', [AdminController::class, 'delete'])->name('delete.Admin');
});


require __DIR__.'/auth.php';
