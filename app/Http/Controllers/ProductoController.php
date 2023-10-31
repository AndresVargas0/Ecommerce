<?php

namespace App\Http\Controllers;

use App\Models\Productos;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Productos::all();

        return view('homeCount', compact('productos'));
       //dd($productos);
    }
}
