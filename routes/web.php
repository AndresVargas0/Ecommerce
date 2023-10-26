<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrearCuentaController;
use App\Http\Controllers\IngresarCuentaController;

Route::get('/', function () {return view('Layouts.nav');})->name('nav');
Route::get('home', function () {return view('home');})->name('home');
Route::get('registrarse', function () {return view('registrarse');})->name('forms');

Route::get('/crearcuenta',[CrearCuentaController::class, 'index']);
Route::post('/crearcuenta',[CrearCuentaController::class,'store'])->name('crearcuenta.post');

Route::get('/ingresarcuenta',[IngresarCuentaController::class, 'index']);
Route::post('/ingresarcuenta',[IngresarCuentaController::class, 'store'])->name('ingresarcuenta.post');