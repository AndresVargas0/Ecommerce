<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pedidos;

class PedidosController extends Controller
{
    public function index()
    {
        $pedidos = Pedidos::all();
        $usid = auth()->user()->id;
        return view('homeCount', compact('pedidos'));
       //dd($productos);
       

    }
}
