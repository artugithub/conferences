<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\AdminLoginController;
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

Route::get('/', [ConferenceController::class, 'index'])->name('home');

Route::get('/admin/login', [AdminLoginController::class, 'showLoginForm'])->name('login');
Route::post('/admin/login', [AdminLoginController::class, 'login'])->name('login.submit');

Route::resource('conferences', ConferenceController::class);
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');
Route::get('/conferences', [ConferenceController::class, 'list'])->name('list');
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('create');
Route::get('/conferences/{conference}/show', [ConferenceController::class, 'show'])->name('conferences.show');
