<?php

use App\Http\Controllers\jogos;
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
Route::prefix('jogos')->group(function() {
    Route::get('/', [jogos::class, 'index'])->name('jogos-index');
    Route::get('/create', [jogos::class, 'create'])->name('jogos-create');
    Route::post('/', [jogos::class, 'store'])->name('jogos-store');
    Route::get('/{id}/edit', [jogos::class, 'edit'])->where('id', '[0-9]+')->name('jogos-edit');
    Route::put('/{id}', [jogos::class, 'update'])->where('id', '[0-9]+')->name('jogos-update');
    Route::delete('/{id}', [jogos::class, 'destroy'])->where('id', '[0-9]+')->name('jogos-destroy');
});

Route::fallback(function() {
    return 'Erro!';
});

