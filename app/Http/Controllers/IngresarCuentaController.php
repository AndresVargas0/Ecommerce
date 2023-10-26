<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IngresarCuentaController extends Controller
{
    public function index(){
        return view('home');
    }
    public function store(Request $request){
        // dd($request);
        $this->validate($request, [
            'email' => 'required',
            'password' => 'required',
        ]);
        if (!auth()->attempt($request->only('email', 'password'), $request->remember)) {
            return back()->with('mensaje', 'Credenciales Incorrectas');
        }
        elseif (auth()->user()->email === 'Admin@gmail.com') {
            return redirect()->route('Layouts.navCount');
        }
        return redirect()->route('Layouts.navCount');
    }
}