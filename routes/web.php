<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BukuController;

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
    return view('index');
});

Route::get('/bukus', [BukuController::class, 'index'])->name('bukus.index');
Route::get('/bukus/create', [BukuController::class, 'create'])->name('create');
Route::post('/bukus', [BukuController::class, 'store'])->name('bukus.store');
Route::get('/bukus/{id}/edit', [BukuController::class, 'edit'])->name('edit');
Route::put('/bukus/{id}', [BukuController::class, 'update']);
Route::delete('/bukus/{id}', [BukuController::class, 'destroy'])->name('bukus.destroy');

