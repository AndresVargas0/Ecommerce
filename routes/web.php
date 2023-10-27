<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrearCuentaController;
use App\Http\Controllers\IngresarCuentaController;
use App\Http\Controllers\AgregarProductoController;

Route::get('/', function () {return view('Layouts.nav');})->name('nav');
Route::get('/home', function () {return view('home');})->name('home');
Route::get('/registrarse', function () {return view('registrarse');})->name('forms');
Route::get('/navCount', function (){return view('Layouts.navCount');})->name('navCount');
Route::get('/homeCount', function () {return view('homeCount');})->name('homeCount');
Route::get('/perfil', function () {return view('perfil');})->name('perfil');

Route::get('/crearcuenta',[CrearCuentaController::class, 'index']);
Route::post('/crearcuenta',[CrearCuentaController::class,'store'])->name('crearcuenta.post');

Route::get('/ingresarcuenta',[IngresarCuentaController::class, 'index']);
Route::post('/ingresarcuenta',[IngresarCuentaController::class, 'store'])->name('ingresarcuenta.post');

Route::get('/agregarproductos',[AgregarProductoController::class, 'index']);
Route::post('/agregarproducts',[AgregarProductoController::class, 'store'])->name('agregarproductos.post');
