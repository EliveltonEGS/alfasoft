<?php

use App\Http\Controllers\Auth\LoginController;
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
    return view('login');
})->name('login');

// [ROUTES LOGIN]
Route::post('/auth-login', [LoginController::class, 'login'])->name('auth.login');
Route::post('/auth-logout', [LoginController::class, 'logout'])->name('auth.logout');

//[ROUTES CONTACT]
Route::get('/contact-list', [ContactController::class, 'index'])->name('contact.index');

Route::middleware(['auth'])->group(function () {
    Route::get('/contact-form/{id?}', [ContactController::class, 'form'])->name('contact.form');
    Route::get('/contact-detail/{id?}', [ContactController::class, 'show'])->name('contact.show');
    Route::post('/contact-store', [ContactController::class, 'store'])->name('contact.store');
    Route::put('/contact-update/{id}', [ContactController::class, 'update'])->name('contact.update');
    Route::delete('/contact-delete/{id}', [ContactController::class, 'destroy'])->name('contact.destroy');
});
