<?php

use App\Http\Controllers\Adm\AdmController;
use App\Http\Controllers\Auth\LoginController;
use Illuminate\Auth\Events\Login;
use Illuminate\Support\Facades\Route;

Route::get('/adm/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/adm/login', [LoginController::class, 'login']);

Route::get('/adm/criarConta', [LoginController::class, 'showRegistrationForm'])->name('register');
Route::post('/adm/criarConta', [LoginController::class, 'register']);

Route::get('/adm/password/reset', [LoginController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/adm/password/email', [LoginController::class, 'sendResetLinkEmail'])->name('password.email');
Route::get('/adm/password/reset/{token}', [LoginController::class, 'showResetForm'])->name('password.reset');
Route::post('/adm/password/reset', [LoginController::class, 'reset'])->name('password.update');

Route::get('/', function () {
    return view('dashboard');
});

Route::get('/painel', function () {
    return view('dashboard');
});

Route::get('/funcionarios', function () {
    return view('funcionarios');
});

Route::get('/login', function () {
    return view('adm/login');
});

Route::get('/criar', function () {
    return view('adm/criarConta');
});

Route::get('/produtos', function () {
    return view('produtos');
});

Route::get('/adm/menu', [AdmController::class, 'menu'])->name('menu');

Route::get('/adm/perfil', [AdmController::class, 'perfil'])->name('perfil');

Route::get('/adm/bandeja', [AdmController::class, 'bandeja'])->name('bandeja');

Route::get('/adm/pagamento', [AdmController::class, 'pagamento'])->name('pagamento');
