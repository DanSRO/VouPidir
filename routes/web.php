<?php

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


Route::get('/menu', function () {
    return view('adm/menu');
});


Route::get('/perfil', function () {
    return view('adm/perfil');
});


Route::get('/bandeja', function () {
    return view('adm/bandeja');
});
