<?php

use App\Http\Controllers\HomeController;
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

Route::get('/', HomeController::class)->name('home');
Route::post('/submit', [HomeController::class, 'submit'])->name('submit');
Route::get('/library/{library}/edit', [HomeController::class, 'edit'])->name('edit');
Route::put('/library/{library}/update', [HomeController::class, 'update'])->name('update');
Route::delete('/library/{library}/delete', [HomeController::class, 'delete'])->name('delete');