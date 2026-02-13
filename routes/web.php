<?php

use App\Http\Controllers\ContactController;
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

Route::get('/contact-list', [ContactController::class, 'index'])->name('contact.index');
Route::get('/contact-form/{id?}', [ContactController::class, 'form'])->name('contact.form');
Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');
Route::put('/contact-update/{id}', [ContactController::class, 'update'])->name('contact.update');
Route::delete('/contact-delete/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
