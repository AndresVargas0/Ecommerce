<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Productos;

class AgregarProductoController extends Controller
{
    public function index()
    {
        return view('Layouts.navCount');
    }

    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'producto' => 'required',
            'cantidad' => 'required',
            'price' => 'required',
            'discount' => 'required',

            'categoria' =>'required',
        ]);

        Productos::create([
            'producto' => $request->producto,
            'cantidad'=> $request->cantidad,
            'price' => $request->price,
            'discount' => $request->discount,
            'categoria' => $request->categoria,
        ]);
        
        return redirect()->route('agregarproductos.post');
    }
}