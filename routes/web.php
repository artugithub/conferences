<?php

use App\Http\Controllers\ConferenceController;
use App\Http\Controllers\AdminLoginController;
use App\Http\Controllers\LanguageController;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\URL;

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

//Route::resource('conferences', ConferenceController::class);
Route::put('/conferences/{conference}', [ConferenceController::class, 'update'])->name('conferences.update');
Route::get('conferences/{conference}/edit', [ConferenceController::class, 'edit'])->name('conferences.edit');
Route::delete('/conferences/{conference}', [ConferenceController::class, 'destroy'])->name('conferences.destroy');
Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');
Route::get('/conferences', [ConferenceController::class, 'list'])->name('list');
Route::get('/conferences/create', [ConferenceController::class, 'create'])->name('create');
Route::get('/conferences/{conference}/show', [ConferenceController::class, 'show'])->name('conferences.show');

Route::get('/switch-language/{locale}', [LanguageController::class, 'switch'])->name('lang.switch');

/*Route::get('/switch-language/{locale}', static function ($locale) {
    if (!in_array($locale, ['en', 'lt'])) {
        abort(code: 400);
    }
    App::setLocale($locale);
    Session::put('locale', $locale);

    Session::put('previousUrl', URL::previous());

    return redirect(Session::get('previousUrl'));

})->name('lang.switch');*/
