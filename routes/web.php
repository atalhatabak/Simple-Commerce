<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;

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



Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/brand/{id}', [App\Http\Controllers\HomeController::class, 'brand']);
Route::get('/type/{id}', [App\Http\Controllers\HomeController::class, 'type']);

Route::prefix('admin')->middleware(['auth','isAdmin'])->group(function(){
    Route::get('/', [AdminController::class, 'index']);
    Route::get('/ekle', [AdminController::class, 'ekle'])->name('admin.ekle');
    Route::post('/kahveekle', [AdminController::class, 'kahveekle'])->name('admin.kahveekle');
    Route::get('/sil/{id}', [AdminController::class, 'kahvesil'])->name('admin.kahvesil');
})->name("admin");