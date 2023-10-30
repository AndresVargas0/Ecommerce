<?php

namespace App\Http\Controllers;

use App\Models\Productos;

class ProductoController extends Controller
{
    public function index()
    {
        $productos = Productos::all();

        return view('packviajes', compact('destinos'));
       //dd($productos);
    }
}
