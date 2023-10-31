<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CrearCuentaController;
use App\Http\Controllers\IngresarCuentaController;
use App\Http\Controllers\AgregarProductoController;
use App\Models\Productos;
use App\Models\User;

Route::get('/', function () {
    $productos = Productos::all();
    return view('home',compact('productos'));
})->name('nav');
Route::get('/home', function () { 
    $productos = Productos::all();
    return view('home',compact('productos'));
})->name('home');
Route::get('/registrarse', function () {return view('registrarse');})->name('forms');
Route::get('/navCount', function (){return view('Layouts.navCount');})->name('navCount');
Route::get('/homeCount', function () {
    $productos = Productos::all();
    return view('homeCount',compact('productos'));
})->name('homeCount');
Route::get('/perfil', function () {
    return view('perfil');
})->name('perfil');

Route::get('/crearcuenta',[CrearCuentaController::class, 'index']);
Route::post('/crearcuenta',[CrearCuentaController::class,'store'])->name('crearcuenta.post');

Route::get('/ingresarcuenta',[IngresarCuentaController::class, 'index'])->name('ingresarcuenta');
Route::post('/ingresarcuenta',[IngresarCuentaController::class, 'store'])->name('ingresarcuenta.post');

Route::get('/agregarproductos',[AgregarProductoController::class, 'index']);
Route::post('/agregarproducts',[AgregarProductoController::class, 'store'])->name('agregarproductos.post');
